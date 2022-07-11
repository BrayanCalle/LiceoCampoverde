<template>
  <div class="row">
    <div v-for="(item, index) in data" :key="index"
      class="col-xs-12 col-sm-6 col-md-4 col-lg-4 row justify-center padding_blog">
      <blog-card :data="item" :index="index" />
    </div>
  </div>
</template>

<script>
import BlogCard from '../components/blog/BlogElement.vue'
export default {
  name: 'section-8',
  components: {
    BlogCard
  },
  data () {
    return {
      data: [
        {
          image: 'home/prekinder-campus-moderno.jpg',
          date: '10/10/2022',
          type: 'Desarrollo',
          user: {
            name: 'Frida Campo',
            perfil: 'home/video-bachillerato-quito.png'
          },
          title: 'La importancia del tiempo libre para el buen desarrollo'
        },
        {
          image: 'home/bachillerato-campus-moderno.jpg',
          date: '10/10/2022',
          type: 'Creatividad',
          user: {
            name: 'Marco Polo',
            perfil: 'home/video-bachillerato-quito.png'
          },
          title: 'Juegos para un fin de samana en casa'
        },
        {
          image: 'home/bachillerato-campus-moderno.jpg',
          date: '10/10/2022',
          type: 'Tutoriales',
          user: {
            name: 'Marco Polo',
            perfil: 'home/video-bachillerato-quito.png'
          },
          title: 'Como armar tu mochila para este 2022'
        },
        {
          image: 'home/escuela-campus-moderno.jpg',
          date: '10/10/2022',
          type: 'Clases',
          user: {
            name: 'Frida Campo',
            perfil: 'home/video-bachillerato-quito.png'
          },
          title: 'La importancia del tiempo libre para el buen desarrollo'
        }
      ]
    }
  }
}
</script>
