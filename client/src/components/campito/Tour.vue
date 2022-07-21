<template>
  <div>
    <q-avatar class="fit cursor-pointer" clickable v-ripple
      @click="videoModal = true">
      <img width="100%" src="figuras/play.svg">
    </q-avatar>

    <q-dialog v-model="videoModal" full-width>
      <div class="row justify-end q-pa-sm absolute-top-right" style="z-index: 99">
        <q-btn round icon="clear" color="black" size="1.5vh" @click="videoModal = false" />
      </div>
      <q-card style="height:100%; width: 100%">
        <iframe
          width="100%"
          height="100%"
          src="https://guiap.com/360/campoverde/">
        </iframe>
      </q-card>
    </q-dialog>
  </div>
</template>

<script>
export default {
  data () {
    return {
      videoModal: false
    }
  }
}
</script>
