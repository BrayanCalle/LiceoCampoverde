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
      <q-card flat class="row justify-center no-wrap border_radius height_auto width_auto"
        :class="!change ? 'card_left_section5' : 'card_right_section5'"
        @click="change = !change">
        <div class="col-6 row justify-end contenedor_section5 width_auto height_auto"
          @mouseenter="change = !change">
          <div class="text text_left text-weight-bolder text-h4 text-center">
            COLLEGE <br>
            BOARD <br>
            + <br>
            AP <br>
            MEMBERS
          </div>
          <img src="home/escuela-quito-campus-amplio.png" class="full-height width_auto img_left" />
        </div>

        <div class="col-6 contenedor_section5 width_auto height_auto"
          @mouseenter="change = !change">
          <div class="text text_right text-weight-bolder text-h4 text-center">HUMANO</div>
          <img src="home/bachillerato-quito-campus-amplio.png" class="full-height width_auto img_right" />
        </div>
      </q-card>
    </div>
  </div>
</template>

<script>
export default {
  name: 'section-4',
  data () {
    return {
      change: false
    }
  }
}
</script>
