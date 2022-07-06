<template>
  <q-layout view="lHh Lpr lFf">
    <header-big/>

    <q-page-container>
      <router-view />
    </q-page-container>

    <footer-data />
  </q-layout>
</template>

<script>
import HeaderBig from 'layouts/components/HeaderBig'
import FooterData from 'layouts/components/Footer'
export default {
  name: 'MainLayout',
  components: {
    HeaderBig,
    FooterData
  },
  data () {
    return {
    }
  }
}
</script>
