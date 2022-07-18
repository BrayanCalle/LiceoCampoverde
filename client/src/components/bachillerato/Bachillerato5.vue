<template>
   <section>
     <div class="row relative-position">
        <div class="action-video">
          <img src="bachillerato/half-circle.svg"/>
          <div class="circle relative-position">
            <video-home class="play-video" />
            <img src="home/video-bachillerato-quito.png" alt="alt"/>
          </div>
        </div>
      </div>
      <div class="bg-dark q-px-xl q-py-xl">
        <p class="text-h2 text-weight-bold text-white my-font-ultra" style="line-height: 4.75rem !important;">
          Campus que <br/>refleja nuestra <br/> <span class="bg-accent text-white q-px-md">metodología</span>
        </p>
        <div class="row q-my-xl">
          <div class="col-12 col-md-4 q-px-sm q-py-sm q-px-xl">
            <div class="card_bachiller">
              <p class="text-h4 text-center bg-info text-white q-px-md q-py-md my-font-ultra">Creatividad</p>
              <img width="100%" src="bachillerato/img1.jpg" alt="imagen"/>
            </div>
          </div>
          <div class="col-12 col-md-4 q-px-sm q-py-sm q-px-xl">
            <div class="card_bachiller">
              <p class="text-h4 text-center bg-warning text-white q-px-md q-py-md my-font-ultra">Actividades</p>
              <img width="100%" src="bachillerato/img2.jpg" alt="imagen"/>
            </div>
          </div>
          <div class="col-12 col-md-4 q-px-sm q-py-sm q-px-xl">
            <div class="card_bachiller">
              <p class="text-h4 text-center bg-positive text-white q-px-md q-py-md my-font-ultra">Infraestructura</p>
              <img width="100%" src="bachillerato/img3.jpg" alt="imagen"/>
            </div>
          </div>
        </div>
      </div>
   </section>
</template>

<script>
import VideoHome from '../Video/Video'
export default {
  name: 'bachiller-5',
  components: {
    VideoHome
  }
}
</script>
