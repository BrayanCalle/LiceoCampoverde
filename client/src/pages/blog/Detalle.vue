<template>
  <div class="q-px-xl column justify-start">
    <div class="row justify-center full-width items-start">
      <q-card flat class="full-width" style="height:auto">
        <q-card-section class="row justify-center">
          <div class="col-xs-12 col-sm-7 col-md-4 col-lg-4">
            <q-img :src="data.image" class="full-height full-width" style="border-bottom-right-radius: 100%;"/>
          </div>

          <q-card-section class="col-xs-12 col-sm-7 col-md-8 col-lg-8 q-pb-lg q-pl-xl column justify-between"
            :style="`background-color:${data.color}`">
            <div class="absolute-bottom-left q-pr-sm" style="left:-30px; bottom: 10px">
              <q-avatar size="60px">
                <img :src="data.user.perfil" />
              </q-avatar>
            </div>

            <div class="text-subtitle2">{{data.type}}</div>

            <div>
              <div class="q-pr-lg q-py-md text-h5 text-bold">{{ data.title }}</div>
              <div class="font_small">{{data.user.name}} || {{data.date}}</div>
            </div>
          </q-card-section>
        </q-card-section>
      </q-card>
    </div>

    <div class="q-py-lg">{{lorem}}</div>

    <q-separator />

    <div class="q-pt-lg text-h4 text-weight-bolder">Temas relacionados</div>

    <div class="row">
      <div v-for="(item, index) in 3" :key="index"
        class="col-xs-12 col-sm-6 col-md-4 col-lg-4 row justify-center padding_blog">
        <blog-card :data="arrayExample[index]" :index="index" />
      </div>
    </div>
  </div>
</template>

<script>
import BlogCard from '../../components/blog/BlogElement.vue'
export default {
  name: 'blog-detalle',
  components: {
    BlogCard
  },
  data () {
    return {
      lorem: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nemo expedita officia molestias perspiciatis neque inventore explicabo quibusdam velit molestiae, deleniti consequuntur commodi, dolorum quisquam exercitationem aspernatur repellendus tempore? Obcaecati?',
      data: {},
      arrayExample: [
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
  },
  watch: {
    idArt: {
      handler (value) {
        this.getData(value)
      }
    }
  },
  computed: {
    idArt () {
      return this.$route.params.id
    }
  },
  created () {
    this.getData(this.$route.params.id)
  },
  methods: {
    getData (id) {
      this.data = this.arrayExample.find(v => v.id === id)
    }
  }
}
</script>
