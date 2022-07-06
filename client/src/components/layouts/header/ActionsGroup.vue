<template>
  <div>
    <q-tabs
        v-model="tab"
        class="border_bottom_radius text-white"
        inline-label
        outside-arrows
        mobile-arrows
        indicator-color="transparent"
      >
        <q-tab name="campito" label="Campito" class="bg-green" />
        <q-tab name="basica" label="E-G. Básica" class="bg-blue" />
        <q-tab name="bachillerato" label="Bachillerato" class="bg-purple" />
        <q-tab name="perfil" icon="people" label="Usuario" class="bg-grey-3 text-grey-8" no-caps />
        <q-tab icon="menu" class="bg-grey-3 text-grey-8" />
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
