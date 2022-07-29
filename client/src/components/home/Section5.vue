<template>
  <div class="animation row justify-around items-center height_section2 fondo_amarillo">
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
        diferenciadores <br class="mobile_element"> nos convierten <br class="web_element">
        en un <br class="mobile_element"> colegio innovador.
      </div>
    </div>

    <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6 column justify-center items-center q-pb-md full-height">
      <carrusel :slide="valSlide" />
    </div>
  </div>
</template>

<script>
import ScrollMagic from 'scrollmagic'
import Carrusel from './CarruselSection5.vue'
export default {
  name: 'section-5',
  components: {
    Carrusel
  },
  data () {
    return {
      valSlide: 1,
      slides: [
        {
          id: 1,
          show: true
        },
        {
          id: 2,
          show: false
        },
        {
          id: 3,
          show: false
        }
      ],
      inversa: [
        {
          id: 1,
          show: true
        },
        {
          id: 2,
          show: false
        },
        {
          id: 3,
          show: false
        }
      ],
      reversa: [
        {
          id: 1,
          show: false
        },
        {
          id: 2,
          show: false
        },
        {
          id: 3,
          show: true
        }
      ]
    }
  },
  mounted () {
    const controller = new ScrollMagic.Controller()
    const scene = new ScrollMagic.Scene({
      triggerElement: '.animation',
      duration: 2000,
      triggerHook: 0
    })
      .setPin('.animation')
      .addTo(controller)
    scene.on('end', (event) => {
      this.slides = JSON.parse(JSON.stringify(this.reversa))
    })
    scene.on('start', (event) => {
      this.slides = JSON.parse(JSON.stringify(this.inversa))
    })
    scene.on('progress', (event) => {
      // console.log('Scene progress changed to ' + event.progress)
      if ((event.progress > 0.330000000) && (event.progress < 0.68)) {
        // console.log('ejecuto 1', event.progress, this.slides[1])
        if (!this.slides[1].show) {
          this.changeCarrusel(2)
          this.slides[1].show = true
        }
      }
      if (event.progress > 0.7) {
        // console.log('ejecuto 2', event.progress)
        if (!this.slides[2].show) {
          this.changeCarrusel(3)
          this.slides[2].show = true
        }
      }
      if ((event.progress < 0.68) && (event.progress > 0.33) && (event.scrollDirection === 'REVERSE')) {
        // console.log('ejecuto 1 reversa', event.progress, this.slides[1])
        if (!this.slides[1].show) {
          this.changeCarrusel(2)
          this.slides[1].show = true
        }
      }
      if (event.progress < 0.33 && event.scrollDirection === 'REVERSE') {
        // console.log('ejecuto 2 reversa', event.progress)
        if (!this.slides[0].show) {
          this.changeCarrusel(1)
          this.slides[0].show = true
        }
      }
    })
  },
  methods: {
    changeCarrusel (val) {
      this.valSlide = val
    }
  }
}
</script>
