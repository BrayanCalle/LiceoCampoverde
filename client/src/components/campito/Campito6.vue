<template>
    <section class="">
      <div class="bg-accent schedule row q-gutter-x-xl justify-center">
        <div class="col-12 col-md-5">
          <div class="row q-gutter-y-md ">
            <div class="col-6 bg-white text-center relative-position">
              <h3>Horario</h3>
            <button class="butons" style="background-color: #6B645F;">
              <modal-horario/>
            </button>
            </div>
            <div class="col-6 bg-primary q-p-sm">
              <img width="100%" style="margin: auto ; display: flex;" src="/figuras/F-C-5.svg" alt="imagen"/>
            </div>
            <div class="col-6 bg-white text-center relative-position">
              <h3>Menú Campito</h3>
            <button class="butons" style="background-color: #6B645F;">
              <modal-calendario/>
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
              <modal-calendario/>
            </button>
            </div>
            <div class="col-6 bg-primary">
              <img width="85%" style="margin: auto ; display: flex;" src="/figuras/F-C-9.svg" alt="imagen"/>
            </div>
             <div class="col-6 bg-white text-center relative-position">
              <h3>Idiomas</h3>
            <button class="butons" style="background-color: #6B645F;">
              <modal-idiomas/>
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
import ModalIdiomas from './ModalIdiomas.vue'
import ModalCalendario from './ModalCalendario.vue'
import ModalHorario from './ModalHorario.vue'

export default {
  name: 'campito-6',
  components: {
    Section7,
    ModalIdiomas,
    ModalCalendario,
    ModalHorario
  }
}
</script>
