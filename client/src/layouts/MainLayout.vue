<template>
  <q-layout view="lHr lpr lfr">
    <header-web @menu="drawer = !drawer"/>

    <drawer-data :drawer="drawer" @close="action()" />

    <q-page-container>
      <router-view />
      {{drawer}}
      <sticky />
    </q-page-container>

    <footer-data />
  </q-layout>
</template>

<script>
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
      console.log('val')
      this.drawer = false
    }
  }
}
</script>
