<template>
  <div>
    <carousel-3d :controls-visible="true" :clickable="false" :autoplayHoverPause="true" :perspective="0">
      <slide v-for="(slide, i) in slides" :key="i" :index="i">
        <figure>
           <div class="q-px-xl q-py-sm text-center">
            <p class="text-h5 text-weight-bold">{{slide.title}}</p>
            <h4 class="text-weight-bold" style="line-height: 0rem;">{{slide.number}}</h4>
            <p class="text-h6 text-weight-bold">{{slide.time}}</p>
            <p class="text-h5 text-weight-bold">{{slide.descripcion}}</p>
          </div>
        </figure>
      </slide>
    </carousel-3d>
  </div>
</template>

<script>
import { Carousel3d, Slide } from 'vue-carousel-3d'

export default {
  name: 'coursel-1',
  components: {
    Carousel3d,
    Slide
  },
  data () {
    return {
      slides: [
        {
          id: 1, title: 'Jueves', number: '12', time: '12:00', descripcion: 'Pristiños con miel. Bebida de avena. Fruta'
        },
        {
          id: 2, title: 'Martes', number: '13', time: '12:00', descripcion: 'Pristiños con miel. Bebida de avena. Fruta'
        },
        {
          id: 3, title: 'Miercoles', number: '13', time: '12:00', descripcion: 'Pristiños con miel. Bebida de avena. Fruta'
        }
      ]
    }
  }
}
</script>

<style>
.carousel-3d-container .current figure {
  margin:0;
}

.carousel-3d-slide.current {
  background-color: #f9d938;
}
.carousel-3d-container .carousel-3d-slide.current figcaption {
  position: absolute;
  background-color: rgba(223, 21, 21, 0.5);
  color: #fff;
  bottom: 0;
  position: absolute;
  bottom: 0;
  padding: 15px;
  font-size: 12px;
  min-width: 100%;
  box-sizing: border-box;
}
</style>
