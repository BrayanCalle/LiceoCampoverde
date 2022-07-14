<template>
   <section>
    <div class="row">
        <div class="col-12 col-md-6 q-px-xl q-px-md">
          <h3 class="text-justify q-px-xl q-py-xl text-weight-bold" >Tour <br/><span class="bg-secondary">virtual</span></h3>
        </div>
        <div class="col-12 col-md-6 text-center q-px-xl q-py-xl relative-position">
          <tour class="tour-play"/>
          <img width="100%" height="100%" src="figuras/Enmascarar.png" alt="img"/>
        </div>
    </div>
    <div class="row bg-dark q-py-xl">
      <div class="col-12 col-md-6 q-py-xl bachiller_btn">
        <div class="card_schedule q-py-xl q-px-xl">
          <p class="lyrics">H</p>
          <div>
            <button>
              <modal-1/>
            </button>
            <p class="text-h5 text-weight-bold text-white q-px-sm">Horario</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6  q-py-xl bachiller_btn ">
         <div class="card_schedule q-px-xl">
          <div>
            <p class="text-h5 text-weight-bold text-white q-pb-sm">Calendario de <br/>actividades</p>
             <button>
              <modal-2/>
             </button>
          </div><br/>
          <p class="lyrics text_lyrics">A</p>
        </div>
      </div>
      <div class="col-12 col-md-6 q-py-xl bachiller_btn ">
        <div class="card_schedule q-py-xl q-px-xl">
          <div class="q-mx-xl">
            <button>
              <modal-3/>
            </button>
            <p class="text-h5 text-weight-bold text-white q-pt-sm">Menú</p>
          </div>
          <p class="lyrics">M</p>
        </div>
      </div>
       <div class="col-12 col-md-6 q-py-xl bachiller_btn">
        <div class="card_schedule q-py-xl q-px-xl">
          <p class="lyrics">I</p>
          <div class="q-mx-xl">
            <button>
              <modal-4/>
            </button>
            <p class="text-h5 text-weight-bold text-white q-pt-sm">Idiomas</p>
          </div>
        </div>
      </div>
    </div>
     <section-7/>
   </section>
</template>

<script>
import Section7 from '../home/Section7'
import Modal1 from './Modal1.vue'
import Modal2 from './Modal2.vue'
import Modal3 from './Modal3.vue'
import Modal4 from './Modal4.vue'
import Tour from '../campito/Tour.vue'

export default {
  name: 'bachiller-6',
  components: {
    Section7,
    Modal1,
    Modal2,
    Modal3,
    Modal4,
    Tour
  }
}
</script>
