<template>
    <section>
      <div class="row relative-position q-py-xl">
        <div class="action-video">
          <img src="figuras/half-circle.svg"/>
          <div class="circle relative-position">
            <video-home class="play-video" />
            <img src="img/Enmascarar.png" alt="alt"/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-5 infrastructure">
          <p class="text-h3 text-weight-bold my-font-ultra">
            Los niños pueden jugar y aprender en <span style="background-color: #2fad62; line-height: 3.5rem;" class="q-px-md q-py-xs text-white">nuestras</span> áreas
          </p>
        </div>
        <div style="background-color: #F9D938;" class="col-12 col-md-7 relative-position infrastructure__circle">
          <div class="row">
            <div class="col-12 col-md-6 circle">
              <img width="100%" src="img/C-3.png" alt="alt"/>
            </div>
            <div class="col-12 col-md-6 "><br/><br/>
              <h4 class="text-weight-bold q-mt-xl q-pt-xl text-center my-font-bold">Infraestructura</h4>
            </div>
            <div class="col-12 col-md-6 text-circle">
              <p class="text-h5">
                Contamos con aulas abiertas, cada una con patio privado donde nuestros Campitos empiezan a soñar y vivir sus aventuras.
              </p>
            </div>
            <div class="col-12 col-md-6 circle">
              <img width="100%" src="img/C-4.png" alt="alt"/>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>

<script>
import VideoHome from '../Video/Video'
export default {
  components: {
    VideoHome
  },
  name: 'campito-4'
}
</script>
