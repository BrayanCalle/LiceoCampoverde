<template>
    <div style="height: 63vh;">
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
        <q-carousel-slide :name="1" img-src="img/EC-7.png" />
        <q-carousel-slide :name="2" img-src="img/desplazamiento.png" />
        <q-carousel-slide :name="3" img-src="img/desplazamiento.png" />
      </q-carousel>
    </div>
</template>

<script>
import { ref } from 'vue'

export default {
  name: 'coursel-basic',
  setup () {
    return {
      slide: ref(1),
      autoplay: ref(true)
    }
  }
}
</script>
