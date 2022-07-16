<template>
  <div v-on:wheel="change" id="carruselId" class="fit column justify-center items-center">
    <q-carousel
      v-model="slide"
      swipeable
      animated
      infinite
      class="border_radius bg-transparent size_carrusel"
    >
      <q-carousel-slide :name="1" class="row no-wrap q-pa-none" >
        <div class="col-6 full-height">
          <transition
            appear
            enter-active-class="animated rotateInDownLeft"
            leave-active-class="animated rollOut"
          >
            <q-img src="home/escuela-quito-campus-amplio.png" class="fit" />
          </transition>
        </div>
        <transition
          appear
          enter-active-class="animated rotateInDownLeft"
          leave-active-class="animated rollOut"
        >
          <div class="col-6 flex flex-center bg-white">
            <div class="my-font-ultra title_1 text-center">HUMANO</div>
          </div>
        </transition>
      </q-carousel-slide>

      <q-carousel-slide :name="2" class="column no-wrap q-pa-none">
        <div class="col-6 full-width card_up_section5">
          <transition
            appear
            enter-active-class="animated rotateInDownLeft"
            leave-active-class="animated rollOut"
          >
            <img src="home/schools-in-quito-cumbaya.png" class="full-height full-width" />
          </transition>
        </div>
        <div class="col-6 flex flex-center card_up_section5">
          <img src="home/schools-in-quito-cumbaya.png" class="full-height width_auto element_hidden"/>
          <transition
            appear
            enter-active-class="animated rotateInDownLeft"
            leave-active-class="animated rollOut"
          >
            <div class="absolute title_1 text-center my-font-ultra">
              PROYECTOS <br>
              ESCOLARES
            </div>
          </transition>
        </div>
      </q-carousel-slide>

      <q-carousel-slide :name="3" class="row no-wrap q-pa-none">
        <div class="col-6 flex flex-center fondo_naranja">
          <transition
            appear
            enter-active-class="animated rotateInDownLeft"
            leave-active-class="animated rollOut"
          >
            <div class="my-font-ultra text-center text_title_small">
              COLLEGE <br>
              BOARD <br>
              + <br>
              AP <br>
              MEMBERS
            </div>
          </transition>
        </div>
        <div class="col-6 full-height">
          <transition
            appear
            enter-active-class="animated rotateInDownLeft"
            leave-active-class="animated rollOut"
          >
            <q-img src="home/bachillerato-quito-campus-amplio.png" class="fit" />
          </transition>
        </div>
      </q-carousel-slide>
    </q-carousel>
  </div>
</template>

<script>
export default {
  data () {
    return {
      slide: 1
    }
  },
  methods: {
    change () {
      this.slide = this.slide === 3 ? this.slide = 1 : this.slide + 1
    }
  }
}
</script>
