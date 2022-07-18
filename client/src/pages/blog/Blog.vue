<template>
  <div class="column justify-between">
    <div class="row">
      <div v-for="(item, index) in data" :key="index"
        class="col-xs-12 col-sm-6 col-md-4 col-lg-4 row justify-center padding_blog">
        <blog-card :data="item" />
      </div>
    </div>

    <div class="row justify-center q-py-lg full-width">
      <q-pagination
        v-model="current"
        :max="3"
        color="grey-8"
        active-color="primary"
        round
        direction-links
      />
    </div>
  </div>
</template>

<script>
import BlogCard from '../../components/blog/BlogElement.vue'
export default {
  name: 'section-8',
  components: {
    BlogCard
  },
  data () {
    return {
      current: 1,
      data: [
        {
          id: '1',
          image: 'blog/blog-1.png',
          date: '10/10/2022',
          type: 'Desarrollo',
          color: '#E5E1D3',
          user: {
            name: 'Frida Campo',
            perfil: 'blog/blog-2.png'
          },
          title: 'La importancia del tiempo libre para el buen desarrollo'
        },
        {
          id: '2',
          image: 'blog/blog-3.png',
          date: '10/10/2022',
          type: 'Creatividad',
          color: '#F9D938',
          user: {
            name: 'Marco Polo',
            perfil: 'blog/blog-5.png'
          },
          title: 'Juegos para un fin de samana en casa'
        },
        {
          id: '3',
          image: 'blog/blog-4.png',
          date: '10/10/2022',
          type: 'Tutoriales',
          color: '#8CAEF9',
          user: {
            name: 'Marco Polo',
            perfil: 'blog/blog-5.png'
          },
          title: 'Como armar tu mochila para este 2022'
        },
        {
          id: '4',
          image: 'blog/blog-1.png',
          date: '10/10/2022',
          type: 'Clases',
          color: '#EF5A37',
          user: {
            name: 'Frida Campo',
            perfil: 'blog/blog-2.png'
          },
          title: 'La importancia del tiempo libre para el buen desarrollo'
        },
        {
          id: '5',
          image: 'blog/blog-1.png',
          date: '10/10/2022',
          type: 'Desarrollo',
          color: '#E5E1D3',
          user: {
            name: 'Marco Polo',
            perfil: 'blog/blog-5.png'
          },
          title: 'Juegos para un fin de semana en casa'
        },
        {
          id: '6',
          image: 'blog/blog-4.png',
          date: '10/10/2022',
          type: 'Comunidad',
          color: '#2FAD62',
          user: {
            name: 'Marco Polo',
            perfil: 'blog/blog-5.png'
          },
          title: 'Como armar tu mochila para este 2022'
        },
        {
          id: '7',
          image: 'blog/blog-1.png',
          date: '10/10/2022',
          type: 'Desarrollo',
          color: '#E5E1D3',
          user: {
            name: 'Frida Campo',
            perfil: 'blog/blog-2.png'
          },
          title: 'La importancia del tiempo libre para el buen desarrollo'
        },
        {
          id: '8',
          image: 'blog/blog-3.png',
          date: '10/10/2022',
          type: 'Creatividad',
          color: '#F9D938',
          user: {
            name: 'Marco Polo',
            perfil: 'blog/blog-5.png'
          },
          title: 'Juegos para un fin de samana en casa'
        },
        {
          id: '9',
          image: 'blog/blog-4.png',
          date: '10/10/2022',
          type: 'Tutoriales',
          color: '#8CAEF9',
          user: {
            name: 'Marco Polo',
            perfil: 'blog/blog-5.png'
          },
          title: 'Como armar tu mochila para este 2022'
        }
      ]
    }
  }
}
</script>
