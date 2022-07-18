<template>
 <div style="height: 66vh;" class="coursel_responsive">
    <q-carousel
      animated
      v-model="slide"
      navigation
      infinite
      :autoplay="autoplay"
      @mouseenter="autoplay = false"
      @mouseleave="autoplay = true"
      height="100%"
      style="border-radius:100%"
    >
      <q-carousel-slide :name="1" img-src="img/desplazamiento.png" />
      <q-carousel-slide :name="2" img-src="img/desplazamiento.png" />
      <q-carousel-slide :name="3" img-src="img/desplazamiento.png" />
      <q-carousel-slide :name="4" img-src="img/desplazamiento.png" />
    </q-carousel>
  </div>
</template>

<script>
import { ref } from 'vue'

export default {
  name: 'coursel-campito',
  setup () {
    return {
      slide: ref(1),
      autoplay: ref(false)
    }
  }
}
</script>
