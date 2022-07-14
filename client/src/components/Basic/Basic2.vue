<template>
   <section>
     <div class="row relative-position" style="background-color: #E5E1D3;">
      <div class="col-12 col-md-6 text-appearance">
        <h3 class="text-weight-bold">
          En educación básica aplicamos nuestro programa <span class="text-white bg-warning">Fortalezas</span> del Carácter
        </h3>
        <p class="text-h4 text-weight-regular">
          Brindamos una formación integral, la cual incluye desarrollo de destrezas y habilidades para el desenvolvimiento en el mundo actual y en su futuro.
        </p>
      </div>
      <div class="col-12 col-md-6 q-pt-xl">
        <img style="max-width: 100%; height: auto;" src="/figuras/F-C-3.svg" alt="imagen"/>
      </div>
    </div>
   <div class="height_section2 row">
    <div class="col-12 q-px-xl q-py-xl column items-start text-h4 text-bold">
      <div>Mejores metodologías <br/> </div>
      <div class="border_green q-px-sm">a nivel mundial</div>
    </div>
    <div class="col-12 column justify-center" style="height: 60%">
      <div class="row justify-center items-center full-height">
        <div class="col-auto row justify-center items-center no-wrap card">
          <div class="full-height">
            <img src="figuras/F-C-phone-3.svg" class="full-height" />
          </div>
          <div class="full-height">
            <img src="img/EB-2.png" class="full-height" />
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
  name: 'basic-2',
  components: {
    Carrusel
  }
}
</script>
