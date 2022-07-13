<template>
  <div class="fit column justify-center">
      <q-carousel
        v-model="slide"
        swipeable
        animated
        infinite
        height="auto"
        class="border_radius bg-transparent"
      >
        <q-carousel-slide :name="1" class="row no-wrap q-pa-none">
          <div class="col-6 full-height">
            <img src="home/escuela-quito-campus-amplio.png" class="full-width" />
          </div>
          <div class="col-6 flex flex-center bg-white">
            <div class=" text-weight-bolder text-h4 text-center">HUMANO</div>
          </div>
        </q-carousel-slide>

        <q-carousel-slide :name="2" class="column no-wrap q-pa-none">
          <div class="col-6 full-width">
            <img src="home/schools-in-quito-cumbaya.png" class="full-height width_auto" />
          </div>
          <div class="col-6 flex flex-center card_up_section5">
            <img src="home/schools-in-quito-cumbaya.png" class="full-height width_auto element_hidden"/>
            <div class="absolute text-weight-bolder text-h4 text-center">
              PROYECTOS <br>
              ESCOLARES
            </div>
          </div>
        </q-carousel-slide>

        <q-carousel-slide :name="3" class="row no-wrap q-pa-none">
          <div class="col-6 flex flex-center fondo_naranja">
            <div class=" text-weight-bolder text-h5 text-center">
              COLLEGE <br>
              BOARD <br>
              + <br>
              AP <br>
              MEMBERS
            </div>
          </div>
          <div class="col-6 full-height">
            <img src="home/bachillerato-quito-campus-amplio.png" class="full-width" />
          </div>
        </q-carousel-slide>
      </q-carousel>

    <!-- <q-card flat class="border_radius height_auto width_auto"
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
      </q-card> -->
  </div>
</template>

<script>
export default {
  data () {
    return {
      slide: 2
    }
  }
}
</script>
