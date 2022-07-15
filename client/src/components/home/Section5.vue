<template>
  <div class="row justify-around items-center height_section2 fondo_amarillo">
    <div class="col-xs-12 col-sm-5 col-md-auto col-lg-auto q-pa-lg">
      <div class="title_1 my-font-ultra">
        Educamos <br>
        seres <br>
        humanos <br>
        <b class="bg-white">que piensan</b> <br>
        con libertad
      </div>
      <div class="q-pt-lg text_section_3">
        Valoramos e impulsamos <br class="mobile_element"> la <br class="web_element">
        importancia del <br class="mobile_element"> <b class="my-font-ultra">equilibrio <br class="web_element">
        entre el ser y el <br class="mobile_element"> saber,</b> es <br class="web_element">
        por eso que <br class="mobile_element"> nuestros <br class="web_element">
        diferenciados <br class="mobile_element"> nos convierten <br class="web_element">
        en un <br class="mobile_element"> colegio innovador.
      </div>
    </div>

    <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6 column justify-center items-center q-pb-md full-height">
      <carrusel />
    </div>
  </div>
</template>

<script>
import Carrusel from './CarruselSection5.vue'
export default {
  name: 'section-5',
  components: {
    Carrusel
  }
}
</script>
