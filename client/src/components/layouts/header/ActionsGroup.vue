<template>
  <div>
    <q-tabs
      v-model="tab"
      inline-label
      mobile-arrows
      indicator-color="transparent"
    >
      <q-tab name="campito" class="bg-secondary border_bottom_left" @click="$router.push({ name: 'campito' })">
        <div class="size_buttons_bar my-font-bold">Campito</div>
      </q-tab>
      <q-tab name="basica" class="bg-primary" @click="$router.push({ name: 'basic' })">
        <div class="size_buttons_bar my-font-bold">E-G. Básica</div>
      </q-tab>
      <q-tab name="bachillerato" class="bg-accent"  @click="$router.push({ name: 'bachiller' })">
        <div class="size_buttons_bar my-font-bold">Bachillerato</div>
      </q-tab>
      <q-tab name="perfil" class="fondo_gris_claro text-grey-8" no-caps
        @click="ir()">
        <div class="row items-center">
          <q-icon name="account_circle" class="size_icon_perfil" />
          <div class="size_buttons_bar my-font-bold">Usuario</div>
        </div>
      </q-tab>
      <q-tab class="fondo_gris_claro text-grey-8 border_bottom_right"
        @click="$emit('menu')" >
        <q-icon name="menu" class="size_icon_perfil" />
      </q-tab>
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
