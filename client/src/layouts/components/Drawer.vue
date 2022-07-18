<template>
  <q-drawer
    v-model="seeDraw"
    side="right"
    overlay
    flat
    :breakpoint="500"
    @hide="$emit('close')"
    style="width: 50vw"
  >
    <div class="fit q-pl-xs border_left_radius">
      <div class="close_drawer q-pt-lg">
        <q-btn round dense size="2vh" color="black" icon="clear" @click="$emit('close')"  />
      </div>

      <q-card class="fit border_left_radius bg-white q-pa-sm">
        <q-scroll-area class="fit">
          <div class="row justify-center q-py-md">
            <q-img src="logo/Favicon-LiceoCampoVerde.svg" style="width:10vh;" />
          </div>

          <div v-for="(item, index) in menu" :key="index">
            <!-- Se muestra si es expandible -->
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

                <q-item-section class="text-grey-8 font_small_caption">{{item.label}}</q-item-section>
              </template>
              <div v-for="(item2, index) in item.items" :key="index" class="q-pl-xl" :class="selecItem === item2 ? 'text-accent' : 'text-grey-8'">
                <q-item clickable v-ripple @click="action(item2)">
                  <q-item-section class="font_small_caption">
                    {{ item2.label }}
                  </q-item-section>
                </q-item>
              </div>
            </q-expansion-item>

            <!-- Se muestra si no es expandible -->
            <q-item v-else clickable v-ripple :class="selecItem === item ? 'text-accent' : 'text-grey-8'"
              @click="action(item)">
              <q-item-section avatar>
                <q-avatar size="30px">
                  <img :src="item.image">
                </q-avatar>
              </q-item-section>
              <q-item-section class="font_small_caption">
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
          ruta: 'acerca-de-nosotros',
          image: 'iconInfo/I-m1.svg'
        },
        {
          label: 'Educación',
          image: 'iconInfo/I-m2.svg',
          items: [
            {
              label: 'Campito',
              ruta: 'campito'
            },
            {
              label: 'Educación Básica',
              ruta: 'basic'
            },
            {
              label: 'Bachillerato',
              ruta: 'bachiller'
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
          ruta: 'inscripcion',
          image: 'iconInfo/I-m5.svg'
        },
        {
          label: 'Admisiones',
          ruta: 'admisiones',
          image: 'iconInfo/I-m5.svg'
        },
        {
          label: 'Blog',
          ruta: 'blog',
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
  },
  methods: {
    action (item) {
      this.selecItem = item
      this.$emit('close')
      if (item.ruta) {
        this.$router.push({ name: item.ruta })
      }
    }
  }
}
</script>
