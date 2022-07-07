<template>
    <q-drawer
      v-model="seeDraw"
      side="right"
      overlay
      :width="280"
      :breakpoint="500"
    >
      <div class="fit q-pl-xs border_left_radius">
        <div class="close_drawer q-pt-lg">
          <q-btn round dense size="sm" color="black" icon="clear" @click="$emit('close')"  />
        </div>
        <q-card class="fit border_left_radius bg-white q-pa-sm">
          <q-scroll-area class="fit">
            <div class="row justify-center q-py-md">
              <q-img src="logo/Favicon-LiceoCampoVerde.svg" style="width:60px;" />
            </div>
            <div v-for="(item, index) in menu" :key="index">
              <q-expansion-item
                v-if="item.items"
                clickable
                group="somegroup"
                color
                expand-separator
              >
                <template v-slot:header>
                  <q-item-section avatar>
                    <q-avatar size="30px">
                      <img :src="item.image">
                    </q-avatar>
                  </q-item-section>

                  <q-item-section class="text-grey-8">{{item.label}}</q-item-section>
                </template>
                <div v-for="(item2, index) in item.items" :key="index" class="q-pl-xl" :class="selecItem === item2 ? 'text-accent' : 'text-grey-8'">
                  <q-item clickable v-ripple @click="selecItem = item2">
                    <q-item-section>
                      {{ item2.label }}
                    </q-item-section>
                  </q-item>
                </div>
              </q-expansion-item>
              <q-item v-else clickable v-ripple :class="selecItem === item ? 'text-accent' : 'text-grey-8'"
              @click="selecItem = item">
                <q-item-section avatar>
                  <q-avatar size="30px">
                      <img :src="item.image">
                  </q-avatar>
                </q-item-section>
                <q-item-section>
                  {{ item.label }}
                </q-item-section>
              </q-item>
            </div>
          </q-scroll-area>
        </q-card>
      </div>
    </q-drawer>
</template>

<script>
export default {
  name: 'drawer-data',
  props: {
    drawer: {
      type: Boolean,
      default: false
    }
  },
  data (el) {
    return {
      seeDraw: el.drawer,
      selecItem: {},
      menu: [
        {
          label: 'Acerca de nosotros',
          ruta: '',
          image: 'iconInfo/I-m1.svg'
        },
        {
          label: 'Educación',
          image: 'iconInfo/I-m2.svg',
          items: [
            {
              label: 'Campito',
              ruta: ''
            },
            {
              label: 'Educación Básica',
              ruta: ''
            },
            {
              label: 'Bachillerato',
              ruta: ''
            }
          ]
        },
        {
          label: '¿Por qué elegirnos?',
          image: 'iconInfo/I-m3.svg',
          items: [
            {
              label: 'Modelo pedagógico',
              ruta: ''
            },
            {
              label: 'Idiomas',
              ruta: ''
            },
            {
              label: 'Perfil del Bachiller',
              ruta: ''
            },
            {
              label: 'College Admissions',
              ruta: ''
            },
            {
              label: 'Código de convivencia',
              ruta: ''
            }
          ]
        },
        {
          label: 'Formulario de inscripción',
          ruta: '',
          image: 'iconInfo/I-m5.svg'
        },
        {
          label: 'Admisiones',
          ruta: '',
          image: 'iconInfo/I-m5.svg'
        },
        {
          label: 'Blog',
          ruta: '',
          image: 'iconInfo/I-m4.svg'
        },
        {
          label: 'Contáctanos',
          ruta: '',
          image: 'iconInfo/I-m6.svg'
        }
      ]
    }
  },
  watch: {
    drawer: {
      handler (value) {
        this.seeDraw = value
      }
    }
  }
}
</script>
