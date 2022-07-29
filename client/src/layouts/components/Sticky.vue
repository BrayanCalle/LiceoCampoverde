<template>
  <div>
    <q-page-sticky position="bottom-right" :offset="[0, 50]" style="z-index: 1">
      <div v-if="!seeMenu" class="row no-wrap items-center sticky_style cursor-pointer"
        @click="seeMenu = true">
        <img src="home/rostro.svg" class="icon_avatar">
        <div class="bg-accent text-white card column justify-center items-center">
          <div class="font_small my-font-bold">Hola, ¿quieres <br> información de <br> admisiones?</div>
        </div>
      </div>

      <div v-else class="row no-wrap items-end sticky_style cursor-pointer">
        <img src="home/rostro-clic.svg" class="icon_avatar" @click="seeMenu = false">
        <div class="q-pa-sm menu my-font-bold">
          <q-list bordered separator>
            <q-item clickable @click="$router.push({ name: 'admisiones' })" v-ripple class="text-white bg-accent">
              <q-item-section class="font_small">Admisiones</q-item-section>
            </q-item>

            <q-item clickable @click="$emit('go')" v-ripple class="text-white bg-blue">
              <q-item-section class="font_small">Contáctanos</q-item-section>
            </q-item>

            <q-item @click="openLink()" clickable v-ripple class="text-white bg-green">
              <q-item-section class="font_small">WhatsApp</q-item-section>
            </q-item>
          </q-list>
        </div>
      </div>
    </q-page-sticky>
  </div>
</template>

<script>
import { openURL } from 'quasar'

export default {
  name: 'Sticky',
  data () {
    return {
      seeMenu: false
    }
  },
  methods: {
    openLink () {
      openURL('https://api.whatsapp.com/send?phone=593999595539&app=facebook&entry_point=page_cta&fbclid=IwAR2-4F2ZGGI2aYVm4252AAnJ8WSky7y-PJkUztaZzcvP5v2GQVrT9Mrxea0')
    }
  }
}
</script>
