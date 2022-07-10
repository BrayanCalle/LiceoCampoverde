<template>
  <div class="q-pa-md">
    <q-carousel
      v-model="slide"
      transition-prev="slide-right"
      transition-next="slide-left"
      animated
      control-color="primary"
      arrows
      height="250px"
      class=""
    >
      <q-carousel-slide :name="1" class="column no-wrap">
        <div class="row fit justify-start items-center q-gutter-xs q-col-gutter no-wrap" style="justify-content: center;">
          <div class="bg-warning q-px-xl q-py-sm text-center">
            <p class="text-h5 text-weight-bold">Miércoles</p>
            <h4 class="text-weight-bold" style="line-height: 0rem;">12</h4>
            <p class="text-h6 text-weight-bold">12:00</p>
            <p class="text-h5 text-weight-bold">Minga general</p>
          </div>
        </div>
      </q-carousel-slide>
      <q-carousel-slide :name="2" class="column no-wrap">
        <div class="row fit justify-start items-center q-gutter-xs q-col-gutter no-wrap" style="justify-content: center;">
          <div class="bg-warning q-px-xl q-py-sm text-center">
            <p class="text-h5 text-weight-bold">Jueves</p>
            <h4 class="text-weight-bold" style="line-height: 0rem;">13</h4>
            <p class="text-h6 text-weight-bold">12:00</p>
            <p class="text-h5 text-weight-bold">Pristiños con miel. Bebida de avena. Fruta</p>
          </div>
        </div>
      </q-carousel-slide>
    </q-carousel>
  </div>
</template>

<script>
import { ref } from 'vue'

export default {
  name: 'coursel-1',
  setup () {
    return {
      slide: ref(1)
    }
  }
}
</script>
