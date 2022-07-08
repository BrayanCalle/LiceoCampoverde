<template>
  <div>
    <q-tabs
      v-model="tab"
      inline-label
      mobile-arrows
      indicator-color="transparent"
    >
      <q-tab name="campito" label="Campito" class="bg-green border_bottom_left" />
      <q-tab name="basica" label="E-G. Básica" class="bg-blue" />
      <q-tab name="bachillerato" label="Bachillerato" class="bg-accent" />
      <q-tab name="perfil" icon="account_circle" label="Usuario" class="bg-grey-3 text-grey-8" no-caps />
      <q-tab icon="menu" class="bg-grey-3 text-grey-8 border_bottom_right" @click="$emit('menu')" />
    </q-tabs>
  </div>
</template>

<script>
export default {
  data (el) {
    return {
      tab: el.$route.name
    }
  }
}
</script>
