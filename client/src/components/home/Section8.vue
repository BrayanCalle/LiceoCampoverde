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
      <q-btn no-caps rounded color="accent" size="md" label="Visitar blog" class="q-px-lg" :to="{ name: 'blog' }" />
    </div>
  </div>
</template>

<script>
import BlogCard from '../blog/BlogElement'
export default {
  name: 'section-8',
  components: {
    BlogCard
  },
  data () {
    return {
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
