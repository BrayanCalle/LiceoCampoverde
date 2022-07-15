<template>
  <div class="fit">
    <q-avatar class="fit cursor-pointer" clickable v-ripple
      @click="videoModal = true">
      <img src="home/video-bachillerato-quito.png" class="fit">
      <div class="absolute-full flex flex-center">
        <img src="home/icons-video.svg" style="width:25%" />
      </div>
    </q-avatar>

    <q-dialog v-model="videoModal" persistent>
      <q-card style="height:50%; width: 100%">
        <div class="row justify-end q-pa-sm absolute-top-right" style="z-index: 1">
          <q-btn round icon="clear" color="black" @click="videoModal = false" />
        </div>

        <video width="100%" height="100%" controls>
          <source src="https://www.youtube.com/watch?v=94_ZnUUF8ZI&ab_channel=LiceoCampoverde" type="video/mp4">
        </video>
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
