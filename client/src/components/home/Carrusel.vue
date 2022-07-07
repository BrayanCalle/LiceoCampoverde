<template>
  <div>
    <img src="figuras/F-4.svg" style="height:100%;"/>
      <!-- <img src="home/rostro.svg" class="video_carrusel"> -->
      <!-- <q-carousel
        v-model="slide"
        transition-prev="scale"
        transition-next="scale"
        swipeable
        animated
        control-color="white"
        navigation
        padding
        height="100%"
        style="border-radius:100%"
        class="text-white absolute-full"
      >
        <q-carousel-slide :name="1" class="column flex-center">
          <div class="text-h4 text-bold">
            Tenemos un <br> espíritu <br> comprometido <br> e innovador
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="2" class="column flex-center">
          <div class="text-h4 text-bold">
            Tenemos un <br> espíritu <br> comprometido <br> e innovador 2
          </div>
        </q-carousel-slide>
      </q-carousel> -->
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
