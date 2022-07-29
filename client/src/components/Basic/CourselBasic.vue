<template>
    <div style="height: 63vh; width: auto;" class="coursel_responsive">
      <q-carousel
        v-model="slide"
        swipeable
        animated
        infinite
        navigation
        autoplay
        height="100%"
        style="border-radius:100%"
      >
        <q-carousel-slide :name="1" img-src="img/EB-5.png" />
        <q-carousel-slide :name="2" img-src="img/EB-6.png" />
        <q-carousel-slide :name="3" img-src="img/EC-7.png" />

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
