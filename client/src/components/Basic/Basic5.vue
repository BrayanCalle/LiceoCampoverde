<template>
    <section class="">
      <div class="bg-accent schedule row q-gutter-x-xl justify-center">
        <div class="col-12 col-md-5">
          <div class="row q-gutter-y-md ">
            <div class="col-6 bg-white text-center relative-position">
              <h3>Horario</h3>
            <button class="butons" style="background-color: #6B645F;">
              <modal-1/>
            </button>
            </div>
            <div class="col-6 bg-primary q-p-sm">
              <img width="100%" style="margin: auto ; display: flex;" src="/figuras/F-C-5.svg" alt="imagen"/>
            </div>
            <div class="col-6 bg-white text-center relative-position">
              <h3>Menú Campito</h3>
            <button class="butons" style="background-color: #6B645F;">
              <modal-3/>
            </button>
            </div>
            <div class="col-6 bg-primary">
              <img width="100%" style="margin: auto ; display: flex;" src="/figuras/F-C-6.svg" alt="imagen"/>
            </div>
          </div>
        </div><br/>
        <div class="col-12 col-md-5">
          <div class="row q-gutter-y-md relative-position">
            <div class="col-6 bg-white text-center relative-position">
              <h4>Calendario de actividades </h4>
            <button class="butons" style="background-color: #6B645F;">
              <modal-2/>
            </button>
            </div>
            <div class="col-6 bg-primary">
              <img width="85%" style="margin: auto ; display: flex;" src="/figuras/F-C-9.svg" alt="imagen"/>
            </div>
             <div class="col-6 bg-white text-center relative-position">
              <h3>Idiomas</h3>
            <button class="butons" style="background-color: #6B645F;">
              <modal-4/>
            </button>
            </div>
            <div class="col-6 bg-primary">
              <img width="100%" style="margin: auto ; display: flex;" src="/figuras/F-C-7.svg" alt="imagen"/>
            </div>
          </div>
        </div>
      </div>
      <section-7/>
    </section>
</template>

<script>
import Section7 from '../home/Section7'
import Modal1 from '../campito/Modal1.vue'
import Modal2 from '../campito/Modal2.vue'
import Modal3 from '../campito/Modal3.vue'
import Modal4 from '../campito/Modal4.vue'

export default {
  name: 'basic-5',
  components: {
    Section7,
    Modal1,
    Modal2,
    Modal3,
    Modal4
  }
}
</script>
