<template>
  <q-layout view="lHr lpr lfr">
    <header-web @menu="drawer = !drawer"/>

    <drawer-data :drawer="drawer" @close="drawer = false" />

    <q-page-container>
      <router-view />

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
  }
}
</script>
