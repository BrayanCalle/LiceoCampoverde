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

    <!-- <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 column justify-center items-center q-py-md full-height">
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
    </div> -->
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 column justify-center items-center q-py-md full-height">
      <q-card flat class="contenedor_section5 no-wrap border_radius height_auto width_auto"
        :class="change === 1 ? 'card_left_section5' : change === 2 ? 'card_right_section5' : 'card_up_section5'">
        <div v-if="change < 3" class="row justify-center border_radius fit">
          <div class="col-6 row justify-end contenedor_section5 width_auto height_auto">
            <div v-if="change === 2" :class="!change ? 'element_hidden' : ''" class="text text-weight-bolder text-h4 text-center">
              COLLEGE <br>
              BOARD <br>
              + <br>
              AP <br>
              MEMBERS
            </div>
            <transition
              v-if="change === 1"
              appear
              class="width_auto height_auto"
              enter-active-class="animated rotateInDownLeft"
              leave-active-class="animated rollOut"
            >
              <img src="home/escuela-quito-campus-amplio.png" class="full-height width_auto"
                @click="change = 3" />
            </transition>
          </div>

          <div class="col-6 contenedor_section5 width_auto height_auto">
            <div v-if="change === 1" class="text text-weight-bolder text-h4 text-center">HUMANO</div>
            <transition
              v-if="change === 2"
              appear
              class="width_auto height_auto"
              enter-active-class="animated rotateInDownLeft"
              leave-active-class="animated rollOut"
            >
              <img src="home/bachillerato-quito-campus-amplio.png" class="full-height width_auto"
                @click="change = 1" />
            </transition>
          </div>
        </div>

        <div v-else class="column justify-center items-center border_radius fit">
          <div class="col-6 row justify-end contenedor_section5 width_auto height_auto">
            <transition
              appear
              class="width_auto height_auto"
              enter-active-class="animated rotateInDownLeft"
              leave-active-class="animated rollOut"
            >
              <img src="home/schools-in-quito-cumbaya.png" class="height_auto width_auto"
                @click="change = 2" />
            </transition>
          </div>

          <div class="col-6 contenedor_section5 width_auto height_auto">
            <img src="home/schools-in-quito-cumbaya.png" class="full-height width_auto element_hidden"/>
            <div class="text text-weight-bolder text-h4 text-center">PROYECTOS <br> ESCOLARES</div>
          </div>
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
      change: 1
    }
  }
}
</script>
