<template>
  <div class="height_section2">
    <div class="column items-start title_1 my-font-ultra padding_title" >
      <div>Somos Liceo</div>
      <div class="border_green_home q-px-sm">Campo Verde</div>
    </div>

    <div class="column justify-center full-width" style="height: 60%">
      <div class="row justify-center items-center fit">
        <div class="col-auto row justify-center items-center no-wrap card">
          <div class="full-height">
            <img src="figuras/F-C-phone-3.svg" class="full-height" />
          </div>
          <div class="full-height">
            <img src="home/prekinder-quito.png" class="full-height" />
          </div>
        </div>

        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 full-height">
          <carrusel class="fit" />
        </div>

        <!-- Video solo en vista movil -->
        <div class="col-12 q-py-md row justify-center mobile_element">
          <video-home class="video_mobile" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Carrusel from './CarruselSection2.vue'
import VideoHome from './Video'
export default {
  name: 'section-2',
  components: {
    Carrusel,
    VideoHome
  }
}
</script>
