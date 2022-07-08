<template>
  <div>
    <q-avatar style="height:100%; width:100%">
      <img src="figuras/F-4.svg" style="height:100%; width:100%"/>

      <!-- Video solo en vista web -->
      <q-avatar class="video_carrusel web_element">
        <img src="home/video-bachillerato-quito.png" class="video">
      </q-avatar>

      <q-carousel
        v-model="slide"
        swipeable
        animated
        control-color="white"
        navigation
        padding
        height="95%"
        style="border-radius:100%"
        class="text-white absolute-full bg-transparent"
      >
        <q-carousel-slide :name="1" class="flex flex-center">
          <div class="text-h5 text-bold">
            Tenemos un <br> espíritu <br> comprometido <br> e innovador
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="2" class="flex flex-center">
          <div class="text-h5 text-bold">
            Tenemos un <br> espíritu <br> comprometido <br> e innovador 2
          </div>
        </q-carousel-slide>
      </q-carousel>
    </q-avatar>
  </div>
</template>

<script>
export default {
  data () {
    return {
      slide: 1
    }
  }
}
</script>
