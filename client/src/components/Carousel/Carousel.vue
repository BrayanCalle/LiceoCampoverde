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
        <q-carousel-slide :name="1" class="flex flex-center ">
          <div class="text-h4 text-bold my-font-ultra">
           Planificación <br/>de Carrera <br/>Universitaria
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="2" class="flex flex-center">
          <div class="text-h4 text-bold my-font-ultra">
            Enseñamos a <br/>Emprender
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="3" class="flex flex-center">
          <div class="text-h4 text-bold my-font-ultra">
            A valorar su<br/>identidad y <br/> cultura
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="4" class="flex flex-center">
          <div class="text-h4 text-bold my-font-ultra">
            A identificar<br/>y expresar<br/>emociones
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="5" class="flex flex-center">
          <div class="text-h4 text-bold my-font-ultra">
            A ver el error<br/>como<br/>aprendizaje
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
