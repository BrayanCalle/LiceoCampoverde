<template>
  <div>
    <q-card class="fondo_blue_dark q-px-xl q-pb-lg q-pt-lg">
      <div class="absolute-top-right q-pa-sm">
        <q-btn round color="black" icon="clear" @click="$emit('close')" />
      </div>

      <q-card-section>
        <div class="text-h4 text-weight-bolder text-white">Comparte <br> contenido de <br><b class="q-px-md fondo_amarillo text-black text-weight-bolder">interes</b></div>
      </q-card-section>

      <q-card-actions align="center" class="row items-center q-gutter-x-xs">
        <q-avatar size="40px" color="grey-8" class="cursor-pointer" v-ripple>
          <img src="iconInfo/I-instagram.svg" style="width:20px; height:40px" />
        </q-avatar>
        <q-avatar size="40px" color="grey-8" class="cursor-pointer" v-ripple>
          <img src="iconInfo/I-linkedin.svg" style="width:20px; height:40px" />
        </q-avatar>
        <q-avatar size="40px" color="grey-8" class="cursor-pointer" v-ripple>
          <img src="iconInfo/I-youtube.svg" style="width:20px; height:40px" />
        </q-avatar>
        <q-avatar size="40px" color="grey-8" class="cursor-pointer" v-ripple>
          <img src="iconInfo/I-facebook.svg" style="width:20px; height:30px" />
        </q-avatar>
        <q-avatar size="40px" color="grey-8" class="cursor-pointer" v-ripple>
          <img src="iconInfo/I-link.svg" style="width:20px; height:40px" />
        </q-avatar>
      </q-card-actions>
    </q-card>
  </div>
</template>

<script>
export default {
  name: 'share-dialog',
  data (el) {
    return {
    }
  }
}
</script>
