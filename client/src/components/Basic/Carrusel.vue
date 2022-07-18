<template>
  <div>
    <q-avatar class="fit">
      <img src="figuras/F-4.svg" class="fit"/>

      <q-carousel
        v-model="slide"
        swipeable
        animated
        infinite
        navigation
        autoplay
        control-color="white"
        height="95%"
        class="text-white absolute-full bg-transparent border_radius"
      >
        <q-carousel-slide :name="1" class="flex flex-center">
          <div class="text-h4 text-weight-bolder my-font-ultra">
            Tenemos un <br>
            espíritu <br>
            comprometido <br>
            e innovador
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="2" class="flex flex-center">
          <div class="text-h4 text-weight-bolder my-font-ultra">
            Apasionados <br>
            en resolver <br>
            problemas <br>
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
