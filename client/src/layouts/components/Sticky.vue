<template>
  <div>
    <q-page-sticky position="bottom-right" :offset="[0, 50]">
      <div v-if="!seeMenu" class="row no-wrap items-center sticky_style cursor-pointer"
        @click="seeMenu = true">
        <img src="home/rostro.svg" class="icon_avatar">
        <div class="bg-purple text-white card q-pa-sm">
          <div class="font_small">Hola, ¿quieres <br> información de <br> admisiones?</div>
        </div>
      </div>

      <div v-else class="row no-wrap items-end sticky_style cursor-pointer">
        <img src="home/rostro-clic.svg" class="icon_avatar" @click="seeMenu = false">
        <div class=" q-pa-sm menu">
          <q-list dense bordered separator>
            <q-item clickable v-ripple class="text-white bg-purple">
              <q-item-section class="font_small">Admisiones</q-item-section>
            </q-item>

            <q-item clickable v-ripple class="text-white bg-blue">
              <q-item-section class="font_small">Contactanos</q-item-section>
            </q-item>

            <q-item clickable v-ripple class="text-white bg-green">
              <q-item-section class="font_small">WhatsApp</q-item-section>
            </q-item>
          </q-list>
        </div>
      </div>
    </q-page-sticky>
  </div>
</template>

<script>
export default {
  name: 'Sticky',
  data () {
    return {
      seeMenu: false
    }
  }
}
</script>
