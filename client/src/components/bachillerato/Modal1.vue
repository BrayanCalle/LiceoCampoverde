<template>
  <div>
    <q-avatar class="fit cursor-pointer" clickable v-ripple
      @click="videoModal = true">
      <img src="figuras/+.svg" class="fit">
    </q-avatar>

    <q-dialog v-model="videoModal" persistent style="width: 100%" >
      <q-card flat class="relative-postion" style="height:auto; max-width: 80%; width: 100%;">
        <div class="row justify-end q-pa-sm icons_modal">
          <q-btn round icon="clear" color="black" @click="videoModal = false" />
        </div>
        <div class="row">
          <div class="col-12 col-md-6 q-px-xl q-py-xl text-center">
            <p class="my-font-bold text-modal text-h4">Horario</p>
          </div>
          <div class="col-12 col-md-6 bg-dark">
            <p class="q-pl-xl text-h1 lyrics_modal H my-font-ultra">H</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-4 q-px-xl q-py-xl text-justify">
            <p class="text-h5 text-weight-bold">
              Hora de ingreso:
            </p>
            <p class="text-h5 text-weight-light">
              7:40
            </p>
          </div>
          <div class="col-12 col-md-4 q-px-xl q-py-xl text-justify">
            <p class="text-h5 text-weight-bold">
              Hora de ingreso:
            </p>
            <p class="text-h6 text-weight-light">
              Lunes y miércoles <br/>de 07:50 a 15:55
            </p>
            <p class="text-h6 text-weight-light">
              Martes, jueves y viernes <br/>de 07:50 a 15:05
            </p>
          </div>
        </div>
      </q-card>
    </q-dialog>
  </div>
</template>

<script>
export default {
  name: 'modal-1',
  data () {
    return {
      videoModal: false
    }
  }
}
</script>
