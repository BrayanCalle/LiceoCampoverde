<template>
  <div>
    <q-avatar class="fit">
      <img src="figuras/F-4.svg" class="fit"/>
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
           Planificación <br/>de Carrera <br/>Universitaria
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="2" class="flex flex-center">
          <div class="text-h5 text-bold">
            Planificación <br/>de Carrera <br/>Universitaria
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
