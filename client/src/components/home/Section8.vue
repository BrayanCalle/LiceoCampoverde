<template>
  <div class="padding_section8">
    <div class="my-font-ultra column items-start title_1 in_title">
      <div>Blog y</div>
      <div class="bg-primary q-px-md">eventos</div>
    </div>

    <!-- Solo se muestra en web -->
    <div class="row justify-around web_element">
      <div v-for="(item, index) in data" :key="index"
        class="col-xs-12 col-sm-3 col-md-3 col-lg-3 row justify-center padding_blog">
        <blog-card :data="item" />
      </div>
    </div>

    <!-- Solo se muestra en movil -->
    <div class="q-py-md mobile_element">
      <q-carousel
        v-model="slide"
        swipeable
        animated
        control-color="grey-8"
        navigation
        padding
        height="100%"
      >
        <q-carousel-slide :name="index + 1" v-for="(item, index) in data" :key="index">
          <blog-card :data="item" />
        </q-carousel-slide>
      </q-carousel>
    </div>

    <div class="row justify-center" style="padding: 5vh 0">
      <q-btn no-caps rounded color="accent" label="Visitar blog" class="buttom_accent my-font-bold"
        :to="{ name: 'blog' }" />
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
      slide: 1,
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
        }
      ]
    }
  }
}
</script>
