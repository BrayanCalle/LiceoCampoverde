<template>
  <div>
    <q-img src="figuras/F-4.svg" style="width:500px">
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
        class="text-white shadow-1 rounded-borders absolute-full"
      >
        <q-carousel-slide :name="1" class="column no-wrap flex-center">
          <q-icon name="style" size="56px" />
          <div class="q-mt-md text-center">
            hola 1
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="2" class="column no-wrap flex-center">
          <q-icon name="live_tv" size="56px" />
          <div class="q-mt-md text-center">
            hola 2
          </div>
        </q-carousel-slide>
      </q-carousel>
    </q-img>
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
