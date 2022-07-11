<template>
  <div class="q-px-xl column justify-start">
    <div class="row justify-center full-width items-start">
      <q-card flat class="full-width" style="height:auto">
        <q-card-section class="row justify-center">
          <div class="col-xs-12 col-sm-7 col-md-4 col-lg-4">
            <q-img :src="data.image" class="full-height full-width" style="border-bottom-right-radius: 100%;"/>
          </div>

          <q-card-section class="col-xs-12 col-sm-7 col-md-8 col-lg-8 q-pb-lg q-pl-xl bg-grey-3 column justify-between">
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
          id: '2',
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
          id: '3',
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
          id: '4',
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
