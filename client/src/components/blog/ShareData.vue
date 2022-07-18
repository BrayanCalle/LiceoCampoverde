<template>
  <div>
    <q-card class="fondo_blue_dark">
      <div class="absolute-top-right q-pa-sm" style="z-index: 99">
        <q-btn round color="black" icon="clear" size="2vh" @click="$emit('close')" />
      </div>

      <q-card-section style="padding: 5vh">
        <div class="title_1 my-font-ultra text-white">Comparte <br> contenido de <br><b class="q-px-md fondo_amarillo text-black my-font-ultra">interes</b></div>
      </q-card-section>

      <q-card-actions align="center" class="row items-center no-wrap q-gutter-x-xs"
        style="padding-bottom: 5vh">
        <q-avatar size="5vh" color="grey-8" class="cursor-pointer" v-ripple>
          <img src="iconInfo/I-instagram.svg" style="width:3vh" />
        </q-avatar>
        <q-avatar size="5vh" color="grey-8" class="cursor-pointer" v-ripple>
          <img src="iconInfo/I-linkedin.svg" style="width:2.5vh" />
        </q-avatar>
        <q-avatar size="5vh" color="grey-8" class="cursor-pointer" v-ripple>
          <img src="iconInfo/I-youtube.svg" style="width:3vh" />
        </q-avatar>
        <q-avatar size="5vh" color="grey-8" class="cursor-pointer" v-ripple>
          <img src="iconInfo/I-facebook.svg" style="height:3vh" />
        </q-avatar>
        <q-avatar size="5vh" color="grey-8" class="cursor-pointer" v-ripple>
          <img src="iconInfo/I-link.svg" style="width:3vh" />
        </q-avatar>
      </q-card-actions>
    </q-card>
  </div>
</template>
