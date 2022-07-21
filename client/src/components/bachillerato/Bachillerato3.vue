<template>
   <section>
     <div class="row relative-position" style="background-color: #E5E1D3;">
      <div class="col-12 col-md-6 text-appearance">
        <h3 class="text-weight-bold my-font-ultra">
          En bachillerato aplicamos nuestro programa <span class="text-white bg-warning q-px-md">Fortalezas</span> del Carácter
        </h3>
        <p class="text-h5 text-weight-regula text_fortaleza">
          Brindamos una formación integral, la cual incluye desarrollo de destrezas y habilidades para el desenvolvimiento en el mundo actual y en su futuro.
        </p>
      </div>
      <div class="col-12 col-md-6 q-pt-xl">
        <img style="max-width: 100%; height: auto;" src="figuras/F-C-3.svg" alt="imagen"/>
      </div>
    </div>
   <div class="height_section2 row">
    <div class="column justify-center full-width" style="height: 60%">
      <div class="row justify-center items-center fit" style="margin-top: 14rem;">
        <div class="col-auto row justify-center items-center no-wrap card">
          <div class="full-height">
            <img src="figuras/F-C-phone-3.svg" class="full-height" />
          </div>
          <div class="full-height">
            <img src="bachillerato/B-3.png" class="full-height" />
          </div>
        </div>

        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 full-height">
          <carrusel class="fit" />
        </div>
      </div>
    </div>
  </div>
   </section>
</template>

<script>
import Carrusel from '../Carousel/Carousel'
export default {
  name: 'bachiller-3',
  components: {
    Carrusel
  }
}
</script>
