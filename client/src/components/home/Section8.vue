<template>
  <div>
    <div class="q-pa-lg column items-start text-h4 text-weight-bolder">
      <div>Blog y</div>
      <div class="bg-primary q-px-md">eventos</div>
    </div>

    <div class="row justify-around">
      <div v-for="(item, index) in data" :key="index"
        class="col-xs-9 col-sm-5 col-md-3 col-lg-3 row justify-center q-pa-md">
        <blog-card :data="item" :index="index" />
      </div>
    </div>

    <div class="row justify-center q-py-lg">
      <q-btn no-caps rounded color="accent" size="md" label="Visitar blog" class="q-px-lg" />
    </div>
  </div>
</template>

<script>
import BlogCard from './BlogElement'
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
