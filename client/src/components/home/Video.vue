<template>
  <div class="fit">
    <q-avatar class="fit cursor-pointer" clickable v-ripple
      @click="videoModal = true">
      <img src="home/video-bachillerato-quito.png" class="fit">
      <div class="absolute-full flex flex-center">
        <img src="home/icons-video.svg" style="width:25%" />
      </div>
    </q-avatar>

    <q-dialog v-model="videoModal" full-width>
      <div class="row justify-end q-pa-sm absolute-top-right" style="z-index: 99">
        <q-btn round icon="clear" color="black" @click="videoModal = false" />
      </div>
      <q-card style="height:100%; width: 100%">
        <iframe
          width="100%"
          height="100%"
          src="https://www.youtube.com/embed/94_ZnUUF8ZI?autoplay=1"
          frameborder="0"
          allowfullscreen
          allow="autoplay"
        ></iframe>
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
