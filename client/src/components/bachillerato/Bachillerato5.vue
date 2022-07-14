<template>
   <section>
     <div class="row relative-position">
        <div class="action-video">
          <img src="/bachillerato/half-circle.svg"/>
          <div class="circle relative-position">
            <video-home class="play-video" />
            <img src="home/video-bachillerato-quito.png" alt="alt"/>
          </div>
        </div>
      </div>
      <div class="bg-dark q-px-xl q-py-xl">
        <p class="text-h2 text-weight-bold text-white">
          Campus que <br/>refleja nuestra <br/> <span class="bg-accent text-white ">metodología</span>
        </p>
        <div class="row q-my-xl">
          <div class="col-12 col-md-4 q-px-sm q-py-sm">
            <div class="card_bachiller">
              <p class="text-h3 text-center bg-info text-white q-px-md q-py-md">Creatividad</p>
              <img width="100%" src="/bachillerato/B-4.png" alt="imagen"/>
            </div>
          </div>
          <div class="col-12 col-md-4 q-px-sm q-py-sm">
            <div class="card_bachiller">
              <p class="text-h3 text-center bg-warning text-white q-px-md q-py-md">Actividades</p>
              <img width="100%" src="/bachillerato/B-4.png" alt="imagen"/>
            </div>
          </div>
          <div class="col-12 col-md-4 q-px-sm q-py-sm">
            <div class="card_bachiller">
              <p class="text-h3 text-center bg-positive text-white q-px-md q-py-md">Infraestructura</p>
              <img width="100%" src="/bachillerato/B-4.png" alt="imagen"/>
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
