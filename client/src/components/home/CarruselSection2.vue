<template>
  <div>
    <q-avatar class="fit">
      <img src="figuras/F-4.svg" class="fit"/>

      <!-- Video solo en vista web -->
      <div class="video_carrusel web_element">
        <video-home />
      </div>

      <q-carousel
        v-model="slide"
        swipeable
        animated
        infinite
        navigation
        autoplay
        control-color="white"
        height="95%"
        class="text-white absolute-full bg-transparent border_radius text_carrusel_black"
      >
        <q-carousel-slide :name="1" class="flex flex-center">
          <div class="text_1 my-font-ultra">
            Tenemos un <br>
            espíritu <br>
            comprometido <br>
            e innovador
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="2" class="flex flex-center">
          <div class="text_2 my-font-ultra ">
            Tomamos acción <br>
            para educar a <br>
            personas con valores, <br>
            que logren influenciar <br>
            positivamente a su <br>
            entorno, la sociedad <br>
            y el medio ambiente.
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
