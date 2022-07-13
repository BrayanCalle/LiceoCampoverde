<template>
  <div class="row justify-around items-center height_section2 fondo_amarillo">
    <div class="col-xs-12 col-sm-auto col-md-auto col-lg-auto q-pa-lg">
      <div class="text-weight-bolder text-h4">
        Educamos <br>
        desde otro <br>
        punto de <br>
        <b class="border_blue q-px-sm">vista</b>
      </div>
      <div class="q-pt-lg text-caption">
        Valoramos e impulsamos la <br>
        importancia del <b>equilibrio <br>
        entre el ser y el saber,</b> es <br>
        por eso que nuestros <br>
        diferenciados nos convierten <br>
        en un colegio innovador.
      </div>
    </div>

    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 column justify-center items-center q-py-md full-height">
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
