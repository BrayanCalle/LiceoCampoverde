<template>
  <div>
    <q-avatar class="fit">
      <img src="figuras/F-4.svg" class="fit"/>

      <!-- Video solo en vista web -->
      <video-home class="video_carrusel web_element" />

      <q-carousel
        v-model="slide"
        swipeable
        animated
        control-color="white"
        navigation
        padding
        height="90%"
        class="text-white absolute-full bg-transparent border_radius"
      >
        <q-carousel-slide :name="1" class="flex flex-center">
          <div class="text-h5 text-weight-bolder cursor-pointer">
            Tenemos un <br> espíritu <br> comprometido <br> e innovador
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="2" class="flex flex-center">
          <div class="text-h5 text-weight-bolder cursor-pointer">
            Tenemos un <br> espíritu <br> comprometido <br> e innovador 2
          </div>
        </q-carousel-slide>
      </q-carousel>
    </q-avatar>
  </div>
</template>

<script>
import VideoHome from './Video'
export default {
  components: {
    VideoHome
  },
  data () {
    return {
      slide: 1
    }
  }
}
</script>
