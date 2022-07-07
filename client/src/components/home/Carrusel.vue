<template>
  <div>
    <div>
    <q-img src="figuras/F-4.svg" style="width:500px">
      <img src="home/rostro.svg" class="video_carrusel">
      <q-carousel
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
            Tenemos un <br> espíritu <br> comprometido <br> e innovador 1
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="2" class="column flex-center">
          <div class="text-h4 text-bold">
            Tenemos un <br> espíritu <br> comprometido <br> e innovador
          </div>
        </q-carousel-slide>
      </q-carousel>
    </q-img>
    </div>
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
