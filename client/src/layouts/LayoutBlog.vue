<template>
  <q-layout view="lHr lpr lfr">
    <q-page-container class="row">
      <router-view class="col-xs-12 col-sm-8 col-md-9 col-lg-9 row order_img" />

      <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 q-pa-md">
        <div class="menu_blog">
          <div class="q-pb-md">
            <q-input dense borderless v-model="search" placeholder="Buscar..." class="bg-grey-3 q-px-md input_buscar my-font-bold" >
              <template v-slot:append>
                <q-icon name="search" />
              </template>
            </q-input>
          </div>

          <q-card flat>
            <!-- Se muestra en pantalla grande -->
            <div class="bg-grey-3 q-pt-md web_element">
              <div class="text_blog_content my-font-ultra q-px-md">Recursos</div>
              <q-item clickable v-ripple dense v-for="(item, index1) in recursos" :key="index1">
                <div class="row no-wrap items-center">
                  <q-icon name="network_cell" size="calc(1em + 1vh)" :style="`color: ${item.color ? item.color : 'grey'}`" />
                  <div class="font_small_caption q-pl-sm my-font-bold">{{item.name}}</div>
                </div>
              </q-item>
            </div>
            <!-- Solo se muestra en pantalla movil -->
            <q-expansion-item
              label="Recursos"
              class="text-h6 my-font-ultra bg-grey-3 mobile_element q-mb-md"
            >
              <q-card class="bg-grey-3">
                <q-item clickable v-ripple dense v-for="(item, index1) in recursos" :key="index1">
                  <div class="row no-wrap items-center">
                    <q-icon name="network_cell" size="xs" :style="`color: ${item.color ? item.color : 'grey'}`" />
                    <div class="text-caption q-pl-sm my-font-bold">{{item.name}}</div>
                  </div>
                </q-item>
              </q-card>
            </q-expansion-item>

            <!-- Se muestra en pantalla grande -->
            <div class="bg-grey-3 q-pb-md web_element">
              <div class="text_blog_content q-px-md q-pt-xl my-font-ultra">Categorías</div>
              <q-item clickable v-ripple dense v-for="(item, index2) in categories" :key="index2">
                <div class="row no-wrap items-center">
                  <q-icon name="network_cell" size="calc(1em + 1vh)" :style="`color: ${item.color ? item.color : 'grey'}`" />
                  <div class="font_small_caption q-pl-sm my-font-bold">{{item.name}}</div>
                </div>
              </q-item>
            </div>
            <!-- Solo se muestra en pantalla movil -->
            <q-expansion-item
              label="Categorías"
              class="text-h6 my-font-ultra bg-grey-3 mobile_element"
            >
              <q-card class="bg-grey-3">
                <q-item clickable v-ripple dense v-for="(item, index1) in categories" :key="index1">
                  <div class="row no-wrap items-center">
                    <q-icon name="network_cell" size="xs" :style="`color: ${item.color ? item.color : 'grey'}`" />
                    <div class="text-caption q-pl-sm my-font-bold">{{item.name}}</div>
                  </div>
                </q-item>
              </q-card>
            </q-expansion-item>
          </q-card>

          <div v-if="$route.meta.compartir" class="row no-wrap items-center q-py-md">
            <div class="font_small_caption q-pr-md my-font-bold">Compartir</div>
            <div class="cursor-pointer" :class="fondoShare" style="border-bottom-right-radius: 100%; padding:1vh"
              @click="share = true" @mouseenter="fondoShare = 'fondo_naranja'" @mouseout="fondoShare = 'fondo_amarillo'">
              <img src="iconInfo/share-option.png" style="height:4vh" class=""
                @mouseenter="fondoShare = 'fondo_naranja'" @mouseout="fondoShare = 'fondo_amarillo'" />
            </div>
          </div>

          <q-dialog v-model="share" persistent>
            <share-data @close="share = false" />
          </q-dialog>
        </div>
      </div>
    </q-page-container>
  </q-layout>
</template>

<script>
import ShareData from '../components/blog/ShareData.vue'
export default {
  name: 'Layout-blog',
  components: {
    ShareData
  },
  data () {
    return {
      share: false,
      fondoShare: 'fondo_amarillo',
      search: '',
      recursos: [
        {
          name: 'E-books'
        },
        {
          name: 'Lorem ipsum'
        }
      ],
      categories: [
        {
          name: 'Clases',
          color: '#EF5A37'
        },
        {
          name: 'Comunidad',
          color: ''
        },
        {
          name: 'Creatividad',
          color: '#F9D938'
        },
        {
          name: 'Desarrollo',
          color: ''
        },
        {
          name: 'Tutoriales',
          color: ''
        }
      ]
    }
  }
}
</script>
