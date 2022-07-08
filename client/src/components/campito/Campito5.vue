<template>
    <section>
      <div class="row bg-info relative-position q-py-md">
        <div class="col-12 col-md-3 bar-te">
          <h3 class="bar-text text-weight-bold text-white">Juegos</h3>
        </div>
        <div class="col-12 col-md-4">
          <div style="height: 63vh;">
            <q-carousel
              animated
              v-model="slide"
              navigation
              infinite
              :autoplay="autoplay"
              arrows
              transition-prev="slide-right"
              transition-next="slide-left"
              @mouseenter="autoplay = false"
              @mouseleave="autoplay = true"
              height="100%"
              style="border-radius:100%"
            >
              <q-carousel-slide :name="1" img-src="/img/desplazamiento.png" />
              <q-carousel-slide :name="2" img-src="/img/desplazamiento.png" />
              <q-carousel-slide :name="3" img-src="/img/desplazamiento.png" />
              <q-carousel-slide :name="4" img-src="/img/desplazamiento.png" />
            </q-carousel>
          </div>
        </div>
        <div class="col-12 col-md-4 text-circle">
          <h5 class="texto-encima">
            Los niños pueden jugar y aprender en amplias áreas verdes con juegos, cascada y arenero.
          </h5>
        </div>
      </div>
      <div class="row bg-secondary relative-position q-py-md">
        <div class="col-12 col-md-4 text-circle">
          <h5 class="texto-encima">
            Tenemos mucho espacio al aire libre, que junto a la granja y huerto aportan para un buen desarrollo psicomotor de nuestros niños.
          </h5>
        </div>
        <div class="col-12 col-md-4">
          <div style="height: 63vh;">
            <q-carousel
              animated
              v-model="slide"
              navigation
              infinite
              :auto="auto"
              arrows
              transition-prev="slide-right"
              transition-next="slide-left"
              @mouseenter="auto = false"
              @mouseleave="auto = true"
              height="100%"
              style="border-radius:100%"
            >
              <q-carousel-slide :name="1" img-src="/img/desplazamiento.png" />
              <q-carousel-slide :name="2" img-src="/img/desplazamiento.png" />
              <q-carousel-slide :name="3" img-src="/img/desplazamiento.png" />
            </q-carousel>
          </div>
        </div>
         <div class="col-12 col-md-3 bar-te">
          <h3 class="bar-text text-weight-bold text-white">Naturaleza</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 q-px-xl q-px-md">
          <h3 class="text-justify q-px-xl q-py-xl" >Tour <br/><span class="bg-secondary">virtual</span></h3>
        </div>
        <div class="col-12 col-md-6 text-center q-px-xl q-py-xl relative-position">
          <tour class="tour-play"/>
          <img width="100%" height="100%" src="/figuras/Enmascarar.png" alt="img"/>
        </div>
      </div>
    </section>
</template>

<script>
import { ref } from 'vue'
import Tour from './Tour.vue'
export default {
  name: 'campito-5',
  components: {
    Tour
  },
  setup () {
    return {
      slide: ref(1),
      autoplay: ref(true),
      auto: ref(false)
    }
  }
}
</script>
