<template>
   <section>
    <div class="row">
      <div class="col-12 col-md-6 q-px-xl q-py-xl">
        <p class="text-h3 text-weight-bold tour-margin">Tour <br/> <span class="bg-secondary">virtual</span></p>
      </div>
      <div class="col-12 col-md-6 q-px-xl q-py-xl">
        <img width="100%" src="/bachillerato/Enmascarar.png" alt="imagen"/>
      </div>
    </div>
    <div class="row bg-dark q-py-xl">
      <div class="col-12 col-md-6 q-py-xl bachiller_btn">
        <div class="card_schedule q-py-xl q-px-xl">
          <p class="lyrics">H</p>
          <div>
            <button><img src="/figuras/+.svg" alt="imagen"/></button>
            <p class="text-h5 text-weight-bold text-white q-pt-sm">Horario</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6  q-py-xl bachiller_btn ">
         <div class="card_schedule q-px-xl">
          <div>
            <p class="text-h5 text-weight-bold text-white q-pb-sm">Calendario de <br/>actividades</p>
             <button><img src="/figuras/+.svg" alt="imagen"/></button>
          </div><br/>
          <p class="lyrics text_lyrics">A</p>
        </div>
      </div>
      <div class="col-12 col-md-6 q-py-xl bachiller_btn ">
        <div class="card_schedule q-py-xl q-px-xl">
          <div class="q-mx-xl">
            <button><img src="/figuras/+.svg" alt="imagen"/></button>
            <p class="text-h5 text-weight-bold text-white q-pt-sm">Menú</p>
          </div>
          <p class="lyrics">M</p>
        </div>
      </div>
       <div class="col-12 col-md-6 q-py-xl bachiller_btn">
        <div class="card_schedule q-py-xl q-px-xl">
          <p class="lyrics">I</p>
          <div class="q-mx-xl">
            <button><img src="/figuras/+.svg" alt="imagen"/></button>
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
export default {
  name: 'bachiller-6',
  components: {
    Section7
  }
}
</script>
