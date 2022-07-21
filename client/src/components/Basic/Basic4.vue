<template>
    <section>
      <div class="row bg-info relative-position circle_one">
        <div class="col-12 col-md-4 bar-te">
          <h3 class="bar-text text-weight-bold text-dark my-font-ultra">Laboratorios</h3>
        </div>
        <div class="col-12 col-md-4">
          <coursel-basic/>
        </div>
        <div class="col-12 col-md-4 text-circle">
          <h5 class="texto-encima one_text-circle">
            Experimentamos en los laboratorios de música, arte, computación, ciencias y en nuestra Biblioteca.
          </h5>
        </div>
      </div>
      <div class="row bg-secondary relative-position circle_one">
         <div class="col-12 col-md-4">
          <div style="height: 60vh;" class="coursel_responsive">
            <q-carousel
              v-model="slide"
              swipeable
              animated
              infinite
              navigation
              autoplay
              height="100%"
              style="border-radius:100%"
            >
              <q-carousel-slide :name="1" img-src="img/EC-8.png" />
              <q-carousel-slide :name="2" img-src="img/desplazamiento.png" />
              <q-carousel-slide :name="3" img-src="img/EC-8.png" />
            </q-carousel>
          </div>
        </div>
        <div class="col-12 col-md-4 text-circle">
          <h5 class="texto-encima two_text-circle">
            Nos divertimos en los juegos de equilibrio, canchas de fútbol, básquetbol y en nuestra pista de atletismo.
          </h5>
        </div>
         <div class="col-12 col-md-3 bar-te">
          <h3 class="bar-text text-weight-bold text-dark my-font-ultra">Espacios recreativos</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-5 q-px-xl q-px-md"><br/><br/>
          <h3 class="text-justify q-px-xl q-py-xl text-weight-bold my-font-ultra" >Tour <br/><span style="background-color: #c6d33a;" class="q-px-md">virtual</span></h3>
        </div>
        <div class="col-12 col-md-7 text-center q-px-xl q-py-xl relative-position">
          <tour class="tour-play"/>
          <img width="100%" height="100%" style="border-radius: 4%;" src="figuras/Enmascarar.png" alt="img"/>
        </div>
      </div>
    </section>
</template>

<script>
import { ref } from 'vue'
import Tour from '../campito/Tour.vue'
import CourselBasic from './CourselBasic.vue'

export default {
  name: 'basic-4',
  components: {
    Tour,
    CourselBasic
  },
  setup () {
    return {
      slide: ref(1),
      autoplay: ref(false)
    }
  }
}
</script>
