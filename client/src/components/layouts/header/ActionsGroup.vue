<template>
  <div>
    <q-tabs
      v-model="tab"
      inline-label
      mobile-arrows
      indicator-color="transparent"
    >
      <q-tab name="campito" label="Campito" class="bg-green border_bottom_left" @click="$router.push({ name: 'campito' })"/>
      <q-tab name="basica" label="E-G. Básica" class="bg-blue" @click="$router.push({ name: 'basic' })"/>
      <q-tab name="bachillerato" label="Bachillerato" class="bg-accent"  @click="$router.push({ name: 'bachiller' })"/>
      <q-tab name="perfil" icon="account_circle" label="Usuario" class="bg-grey-3 text-grey-8" no-caps @click="ir()" />
      <q-tab icon="menu" class="bg-grey-3 text-grey-8 border_bottom_right" @click="$emit('menu')" />
    </q-tabs>
  </div>
</template>

<script>
import { openURL } from 'quasar'
export default {
  data (el) {
    return {
      tab: el.$route.name
    }
  },
  methods: {
    ir () {
      openURL('https://www.liceocampoverde.edu.ec/intranet/login.php')
    }
  }
}
</script>
