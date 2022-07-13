<template>
  <div class="q-px-xl column justify-start">
    <div class="row justify-center full-width items-start">
      <q-card flat class="full-width" style="height:auto">
        <q-card-section class="row justify-center">
          <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
            <q-img :src="data.image" class="full-height full-width" style="border-bottom-right-radius: 100%;"/>
          </div>

          <q-card-section class="col-xs-12 col-sm-9 col-md-8 col-lg-8 q-pb-lg q-pl-xl column justify-between"
            :style="`background-color:${data.color}`">
            <div class="absolute-bottom-left q-pr-sm web_element" style="left:-30px; bottom: 10px">
              <q-avatar size="60px">
                <img :src="data.user.perfil" />
              </q-avatar>
            </div>

            <!-- Solo se muestra en movil -->
            <div class="mobile_element">
              <div class="absolute-top-right column items-end q-pr-sm" style="top:-30px; right: 10px">
                <q-avatar size="60px">
                  <img :src="data.user.perfil" />
                </q-avatar>
              </div>
              <div class="text-right q-pt-lg">
                <div class="font_small">{{data.user.name}} || {{data.date}}</div>
                <div class="text-subtitle2">{{data.type}}</div>
              </div>
            </div>

            <!-- Solo se muestra en web -->
            <div class="text-subtitle2 web_element">{{data.type}}</div>

            <div>
              <div class="q-pr-lg q-py-md text-h5 text-bold">{{ data.title }}</div>
              <!-- Solo se muestra en web -->
              <div class="font_small web_element">{{data.user.name}} || {{data.date}}</div>
            </div>
          </q-card-section>
        </q-card-section>
      </q-card>
    </div>

    <div class="q-py-lg">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel ultrices diam, quis semper mauris. Maecenas condimentum condimentum dictum. Donec congue, ligula quis vestibulum sagittis, ante turpis feugiat urna, in dictum sem odio at enim. Morbi a consectetur orci, id lobortis magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur quis sem tellus. Morbi rhoncus ligula ac lacus luctus, in varius ex tincidunt. Sed viverra augue in sagittis volutpat. Proin luctus rhoncus mi. Nunc velit velit, tempus et augue vel, venenatis sodales libero.
    </div>

    <div class="text-h4 text-weight-bolder q-pb-lg">Título ejemplo</div>
    <div class="q-pb-lg">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel ultrices diam, quis semper mauris. Maecenas condimentum condimentum dictum. Donec congue, ligula quis vestibulum sagittis, ante turpis feugiat urna, in dictum sem odio at enim. Morbi a consectetur orci, id lobortis magna. Vestibulum an.
    </div>

    <div class="q-pb-lg text-weight-bolder text-h5">Subtítulo ejemplo</div>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel ultrices diam, quis semper mauris. Maecenas condimentum condimentum dictum. Donec congue, ligula quis vestibulum sagittis, ante turpis feugiat urna, in dictum sem odio at enim. Morbi a consectetur orci, id lobortis magna. Vestibulum an.
    </p>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel ultrices diam, quis semper mauris. Maecenas condimentum condimentum dictum. Donec congue, ligula quis vestibulum sagittis, ante turpis feugiat urna, in dictum sem odio at enim. Morbi a consectetur orci, id lobortis magna. Vestibulum an.
    </p>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel ultrices diam, quis semper mauris. Maecenas condimentum condimentum dictum. Donec congue, ligula quis vestibulum sagittis, ante turpis feugiat urna, in dictum sem odio at enim. Morbi a consectetur orci, id lobortis magna. Vestibulum an.
    </p>

    <div class="text-center text-h5 text-weight-bolder q-pt-lg">
      “Ejemplo cita o texto para <br>
      resaltar o darle prioridad de <br>
      lectura lorem ipsum dolor,”
    </div>
    <div class="text-center text-caption">Lorem ipsum autor</div>

    <div class="q-py-lg">Listado de texto</div>
    <div class="q-pb-lg">
      <b>- Lorem ipsum:</b> dolor sit amet, consectetur adipiscing elit. <br>
      <b>- Suspendisse:</b> vel ultrices diam, quis semper mauris. <br>
      <b>- Maecenas:</b> condimentum condimentum dictum. Donec congue, ligula quis vestibulum sagittis, ante turpis feugiat urna, in dictum sem odio at enim. Vestibulum an.
    </div>

    <img src="blog/blogIn-1.jpg" width="100%" />

    <div class="q-py-lg text-weight-bolder text-h5">Subtítulo ejemplo</div>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel ultrices diam, quis semper mauris. Maecenas condimentum condimentum dictum. Donec congue, ligula quis vestibulum sagittis, ante turpis feugiat urna, in dictum sem odio at enim. Morbi a consectetur orci, id lobortis magna. Vestibulum an.
    </p>

    <div class="row no-wrap items-center q-py-md">
      <div class="text-caption text-bold q-pr-md">Compartir</div>
      <img src="iconInfo/share-option.png" style="width:30px" class="cursor-pointer" @click="share = true" />
    </div>

    <q-separator />

    <div class="q-py-lg text-weight-bolder" style="font-size: calc(1.5em + 1.5vw)">Temas relacionados</div>

    <!-- Solo se muestra en web -->
    <div class="row web_element">
      <div v-for="(item, index) in 3" :key="index"
        class="col-xs-12 col-sm-6 col-md-4 col-lg-4 row justify-center padding_blog">
        <blog-card :data="arrayExample[index]" />
      </div>
    </div>

    <!-- Solo se muestra en movil -->
    <div class="q-pb-md mobile_element">
      <q-carousel
        v-model="slide"
        swipeable
        animated
        control-color="grey-8"
        navigation
        padding
        height="100%"
      >
        <q-carousel-slide :name="index + 1" v-for="(item, index) in 3" :key="index">
          <blog-card :data="arrayExample[index]" />
        </q-carousel-slide>
      </q-carousel>
    </div>

    <q-dialog v-model="share" persistent>
      <share-data @close="share = false" />
    </q-dialog>
  </div>
</template>

<script>
import BlogCard from '../../components/blog/BlogElement.vue'
import ShareData from '../../components/ShareData.vue'
export default {
  name: 'blog-detalle',
  components: {
    BlogCard,
    ShareData
  },
  data () {
    return {
      share: false,
      slide: 1,
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
