<template>
  <div class="height_section2 row">
    <div class="col-12 q-pa-md column items-start text-h4 text-bold">
      <div>Somos Liceo</div>
      <div class="border_green q-ml-md q-px-sm">Campo Verde</div>
    </div>

    <div class="col-12 column justify-center" style="height: 60%">
      <div class="row justify-center items-center" style="height:100%">
        <div class="col-auto row justify-center items-center no-wrap card">
          <div style="height:100%">
            <img src="figuras/F-C-phone-3.svg" style="height:100%" />
          </div>
          <div style="height:100%">
            <img src="home/prekinder-quito.png" style="height:100%" />
          </div>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 card">
          <carrusel style="height:100%; width:100%" />
        </div>

        <!-- Video solo en vista movil -->
        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 q-pb-md row justify-center mobile_element">
          <q-avatar class="video_mobile">
            <img src="home/video-bachillerato-quito.png" style="height:100%; width:100%">
          </q-avatar>
        </div>
      </div>
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
