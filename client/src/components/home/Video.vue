<template>
  <div>
    <q-avatar class="fit cursor-pointer" clickable v-ripple
      @click="videoModal = true">
      <img src="home/video-bachillerato-quito.png" class="fit">
    </q-avatar>

    <q-dialog v-model="videoModal" persistent>
      <q-card flat class="bg-transparent fit">
        <div class="buttom_close_video row justify-end">
          <q-btn round icon="clear" color="black" @click="videoModal = false" />
        </div>

        <q-card class="bg-grey-8" style="width:100%; height:90%">
        </q-card>
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
