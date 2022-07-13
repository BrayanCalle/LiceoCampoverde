<template>
  <div class="column justify-between">
    <div class="row">
      <div v-for="(item, index) in data" :key="index"
        class="col-xs-12 col-sm-6 col-md-4 col-lg-4 row justify-center padding_blog">
        <blog-card :data="item" :index="index" />
      </div>
    </div>

    <div class="row justify-center q-py-lg">
      <q-pagination
        v-model="current"
        :max="3"
        color="grey-8"
        active-color="primary"
        round
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
          user: {
            name: 'Frida Campo',
            perfil: 'blog/blog-2.png'
          },
          title: 'La importancia del tiempo libre para el buen desarrollo'
        }
      ]
    }
  }
}
</script>
