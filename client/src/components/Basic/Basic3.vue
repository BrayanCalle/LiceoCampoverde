<template>
    <section>
       <div class="row relative-position">
        <div class="action-video">
          <img src="figuras/half-circle.svg"/>
          <div class="circle relative-position">
            <video-home class="play-video" />
            <img src="home/video-bachillerato-quito.png" alt="alt"/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-5 infrastructure">
          <p class="text-h3 text-weight-bold my-font-ultra">
            Calidad, espacio, <span class="bg-positive q-px-sm text-white q-px-md ">diseño</span> y construcción
          </p>
        </div>
        <div class="col-12 col-md-7 bg-warning relative-position infrastructure__circle">
          <div class="row">
            <div class="col-12 col-md-6 circle">
              <img width="100%" src="img/EB-3.png" alt="alt"/>
            </div>
            <div class="col-12 col-md-6 "><br/><br/>
              <h4 class="text-weight-bold q-mt-xl q-pt-xl text-center my-font-bold">Infraestructura</h4>
            </div>
            <div class="col-12 col-md-6 text-circle">
              <p class="text-h5">
                Entorno rodeado de naturaleza, amplias áreas verdes e infraestructura moderna que aporta al crecimiento y desarrollo personal.
              </p>
            </div>
            <div class="col-12 col-md-6 circle">
              <img width="100%" src="img/EB-4.png" alt="alt"/>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>

<script>
import VideoHome from '../Video/Video'
export default {
  name: 'basic-3',
  components: {
    VideoHome
  }
}
</script>3
