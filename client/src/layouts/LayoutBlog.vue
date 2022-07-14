<template>
  <q-layout view="lHr lpr lfr">
    <q-page-container class="row">
      <router-view class="col-xs-12 col-sm-8 col-md-9 col-lg-9 row order_img" />

      <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 q-pa-md">
        <div class="menu_blog">
          <div class="q-pb-md">
            <q-input dense borderless v-model="search" placeholder="Buscar..." class="bg-grey-3 q-px-md" style="border-radius:20px" >
              <template v-slot:append>
                <q-icon name="search" />
              </template>
            </q-input>
          </div>

          <q-card flat>
            <!-- Se muestra en pantalla grande -->
            <div class="bg-grey-3 q-pt-md web_element">
              <div class="text-h6 text-weight-bolder q-px-md">Recursos</div>
              <q-item clickable v-ripple dense v-for="(item, index1) in recursos" :key="index1">
                <div class="row no-wrap items-center">
                  <q-icon name="network_cell" size="xs" :style="`color: ${item.color ? item.color : 'grey'}`" />
                  <div class="text-caption q-pl-sm">{{item.name}}</div>
                </div>
              </q-item>
            </div>
            <!-- Solo se muestra en pantalla movil -->
            <q-expansion-item
              label="Recursos"
              class="text-h6 text-weight-bolder bg-grey-3 mobile_element q-mb-md"
            >
              <q-card class="bg-grey-3">
                <q-item clickable v-ripple dense v-for="(item, index1) in recursos" :key="index1">
                  <div class="row no-wrap items-center">
                    <q-icon name="network_cell" size="xs" :style="`color: ${item.color ? item.color : 'grey'}`" />
                    <div class="text-caption q-pl-sm">{{item.name}}</div>
                  </div>
                </q-item>
              </q-card>
            </q-expansion-item>

            <!-- Se muestra en pantalla grande -->
            <div class="bg-grey-3 q-pb-md web_element">
              <div class="text-h6 text-weight-bolder q-px-md q-pt-xl">Categorías</div>
              <q-item clickable v-ripple dense v-for="(item, index2) in categories" :key="index2">
                <div class="row no-wrap items-center">
                  <q-icon name="network_cell" size="xs" :style="`color: ${item.color ? item.color : 'grey'}`" />
                  <div class="text-caption q-pl-sm">{{item.name}}</div>
                </div>
              </q-item>
            </div>
            <!-- Solo se muestra en pantalla movil -->
            <q-expansion-item
              label="Categorías"
              class="text-h6 text-weight-bolder bg-grey-3 mobile_element"
            >
              <q-card class="bg-grey-3">
                <q-item clickable v-ripple dense v-for="(item, index1) in categories" :key="index1">
                  <div class="row no-wrap items-center">
                    <q-icon name="network_cell" size="xs" :style="`color: ${item.color ? item.color : 'grey'}`" />
                    <div class="text-caption q-pl-sm">{{item.name}}</div>
                  </div>
                </q-item>
              </q-card>
            </q-expansion-item>
          </q-card>

          <div v-if="$route.meta.compartir" class="row no-wrap items-center q-py-md">
            <div class="text-caption text-bold q-pr-md">Compartir</div>
            <div class="fondo_amarillo q-pa-sm" style="border-bottom-right-radius: 100%">
              <img src="iconInfo/share-option.png" style="width:20px" class="cursor-pointer" @click="share = true" />
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
import ShareData from '../components/ShareData.vue'
export default {
  name: 'Layout-blog',
  components: {
    ShareData
  },
  data () {
    return {
      share: false,
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
