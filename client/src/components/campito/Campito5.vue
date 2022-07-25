<template>
    <section>
      <div style="background-color: #19a4e8;" class="row relative-position q-py-xl ">
        <div data-aos="fade-right" class="col-12 col-md-3 bar-te">
          <h3 class="bar-text text-weight-bold text-white my-font-ultra">Juegos</h3>
        </div>
        <div class="col-12 col-md-4">
         <coursel-campito/>
        </div>
        <div class="col-12 col-md-4 text-circle">
          <h5 class="texto-encima one_text-circle">
            Los niños pueden jugar y aprender en amplias áreas verdes con juegos, cascada y arenero.
          </h5>
        </div>
      </div>
      <div  style="background-color: #00b059;" class="row relative-position q-py-xl circle_one">
         <div class="col-12 col-md-4">
          <div style="height: 63vh;" class="coursel_responsive">
            <q-carousel
              animated
              v-model="slide"
              navigation
              infinite
              :auto="auto"
              @mouseenter="auto = false"
              @mouseleave="auto = true"
              height="100%"
              style="border-radius:100%"
            >
              <q-carousel-slide :name="1" img-src="img/desplazamiento-3.png" />
              <q-carousel-slide :name="2" img-src="img/C-10.png" />
              <q-carousel-slide :name="3" img-src="img/C-11.png" />
            </q-carousel>
          </div>
        </div>
        <div class="col-12 col-md-4 text-circle">
          <h5 class="texto-encima two_text-circle">
            Tenemos mucho espacio al aire libre, que junto a la granja y huerto aportan para un buen desarrollo psicomotor de nuestros niños.
          </h5>
        </div>
         <div data-aos="fade-left" class="col-12 col-md-3 bar-te">
          <h3 class="bar-text text-weight-bold my-font-ultra">Naturaleza</h3>
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
import Tour from './Tour.vue'
import CourselCampito from './CourselCampito.vue'

export default {
  name: 'campito-5',
  components: {
    Tour,
    CourselCampito
  },
  setup () {
    return {
      slide: ref(1),
      auto: ref(false)
    }
  }
}
</script>
