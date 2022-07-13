<template>
  <div>
    <q-avatar class="fit cursor-pointer" clickable v-ripple
      @click="videoModal = true">
      <img src="home/video-bachillerato-quito.png" class="fit">
      <div class="absolute-full flex flex-center">
        <img src="home/icons-video.svg" style="width:25%" />
      </div>
    </q-avatar>

    <q-dialog v-model="videoModal" persistent>
      <q-card flat class="bg-grey-5 full-width" style="height:50%">
        <div class="row justify-end q-pa-sm">
          <q-btn round icon="clear" color="black" @click="videoModal = false" />
        </div>
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
