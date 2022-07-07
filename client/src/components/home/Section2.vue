<template>
  <div style="height:100vh">
    <div class="q-pa-md column items-start text-h4 text-bold">
      <div>Somos Liceo</div>
      <div class="border_green q-ml-md q-px-sm">Campo Verde</div>
    </div>
    <div class="row justify-center q-pa-md flex-center">
      <div>
        <img src="figuras/F-C-phone-3.svg" height="500px" />
      </div>
      <div>
        <img src="home/prekinder-quito.png" height="500px" />
      </div>
      <carrusel />
    </div>
  </div>
</template>

<script>
import Carrusel from './Carrusel.vue'
export default {
  name: 'section-2',
  components: {
    Carrusel
  },
  data () {
    return {
      windowHeight: window.innerHeight
    }
  }
}
</script>
