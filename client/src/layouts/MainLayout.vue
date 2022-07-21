<template>
  <q-layout view="lHr lpr lfr">
    <header-web @menu="drawer = !drawer"/>

    <drawer-data :drawer="drawer" @go="goTo()" @close="action()" />

    <q-page-container>
      <router-view />
      <sticky @go="goTo()" />
    </q-page-container>
    <div ref="footer">
      <footer-data />
    </div>
  </q-layout>
</template>

<script>
import { scroll } from 'quasar'
const { getScrollTarget, animScrollTo } = scroll
import HeaderWeb from 'layouts/components/HeaderWeb'
import FooterData from 'layouts/components/Footer'
import DrawerData from 'layouts/components/Drawer'
import Sticky from 'layouts/components/Sticky'
export default {
  name: 'MainLayout',
  components: {
    HeaderWeb,
    FooterData,
    DrawerData,
    Sticky
  },
  data () {
    return {
      drawer: false
    }
  },
  methods: {
    action () {
      this.drawer = false
    },
    goTo () {
      const target = getScrollTarget(this.$refs.footer)
      const offset = this.$refs.footer.offsetTop
      setTimeout(() => {
        animScrollTo(target, offset, 1000)
      }, 300)
    }
  }
}
</script>
