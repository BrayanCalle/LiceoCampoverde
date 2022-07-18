<template>
   <section>
     <div class="row relative-position bg-primary">
      <div class="col-12 col-md-6 text-appearanc">
        <h3 class="text-weight-bold my-font-ultra">
          En Campito aplicamos nuestro programa <span class="bg-warning q-px-md q-py-sm">Fortalezas</span> del Carácter
        </h3>
        <p class="text-h5 text-weight-regular my-font text_fortaleza">
          Brindamos una formación integral, la cual incluye desarrollo de destrezas y habilidades para el desenvolvimiento en el mundo actual y en su futuro.
        </p>
      </div>
      <div class="col-12 col-md-5 q-pt-xl">
        <img style="width: 100%; height: 100%;" src="figuras/F-C-3.svg" alt="imagen"/>
      </div>
    </div>
   <div class="row">
    <div class="text-appearanc col-12 q-pa-md column items-start text-h4 text-bold my-font-ultra">
      <div class="text-h3">Incentivamos el<br/> juego, la pasión</div>
      <div class="text-h3 border_green q-px-sm my-font-ultra">y el propósito</div>
    </div>
    <div class="col-12 column justify-center q-pb-xl" style="height: 80%">
      <div class="row justify-center items-center full-height q-pt-xl">
        <div class="col-auto row justify-center items-center no-wrap card">
          <div class="full-height">
            <img src="figuras/F-C-phone-3.svg" class="full-height" />
          </div>
          <div class="full-height">
            <img src="img/C-2.png" class="img_responsive" />
          </div>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 card">
          <carrusel class="fit" />
        </div>
      </div>
    </div>
  </div>
   </section>
</template>

<script>
import Carrusel from './Carrusel.vue'
export default {
  name: 'campito-3',
  components: {
    Carrusel
  }
}
</script>
