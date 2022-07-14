<template>
    <section>
      <div class="row bg-info relative-position q-py-md">
        <div class="col-12 col-md-4 bar-te">
          <h3 class="bar-text text-weight-bold text-dark">Laboratorios</h3>
        </div>
        <div class="col-12 col-md-4">
          <coursel-basic/>
        </div>
        <div class="col-12 col-md-4 text-circle">
          <h5 class="texto-encima">
            Experimentamos en los laboratorios de música, arte, computación, ciencias y en nuestra Biblioteca.
          </h5>
        </div>
      </div>
      <div class="row bg-secondary relative-position q-py-md">
        <div class="col-12 col-md-4 text-circle">
          <h5 class="texto-encima">
            Nos divertimos en los juegos de equilibrio, canchas de fútbol, básquetbol y en nuestra pista de atletismo.
          </h5>
        </div>
        <div class="col-12 col-md-4">
          <div style="height: 63vh;">
            <q-carousel
              animated
              v-model="slide"
              navigation
              infinite
              :autoplay="autoplay"
              @mouseenter="autoplay = false"
              @mouseleave="autoplay = true"
              height="100%"
              style="border-radius:100%"
            >
              <q-carousel-slide :name="1" img-src="img/EC-8.png" />
              <q-carousel-slide :name="2" img-src="img/desplazamiento.png" />
              <q-carousel-slide :name="3" img-src="img/EC-8.png" />
            </q-carousel>
          </div>
        </div>
         <div class="col-12 col-md-3 bar-te">
          <h3 class="bar-text text-weight-bold text-dark">Espacios recreativos</h3>
        </div>
      </div>
        <div class="row">
        <div class="col-12 col-md-6 q-px-xl q-px-md">
          <h3 class="text-justify q-px-xl q-py-xl text-weight-bold" >Tour <br/><span class="bg-secondary">virtual</span></h3>
        </div>
        <div class="col-12 col-md-6 text-center q-px-xl q-py-xl relative-position">
          <tour class="tour-play"/>
          <img width="100%" height="100%" src="figuras/Enmascarar.png" alt="img"/>
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
