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
          <div class="col-md-6 col-12 q-px-xl q-py-xl text-center">
            <p class="text-h4 my-font-bold text-modal">Horario</p>
          </div>
          <div class="col-md-6 col-12 bg-info">
            <img style="margin: auto; display: flex;" width="80%" height="100%" src="figuras/F-C-5.svg" alt="imagen"/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-12 q-px-xl q-py-xl text-justify">
            <p class="text-h5 text-weight-bold">
              Horario de ingreso:
            </p>
            <p class="text-h5 text-weight-light">
              7:40
            </p>
          </div>
          <div class="col-md-4 col-12 q-px-xl q-py-xl text-justify">
            <p class="text-h5 text-weight-bold">
              Horario de clases:
            </p>
            <p class="text-h6 text-weight-light">
              Lunes a Viernes <br/>8:20 a 12:45
            </p>
          </div>
           <div class="col-md-4 col-12 q-px-xl q-py-xl text-justify">
            <p class="text-h5 text-weight-bold">
              Horario Club Campito:
            </p>
            <p class="text-h6 text-weight-light">
              Lunes y miércoles <br/>de 12:55 a 16:05
            </p>
            <p class="text-h6 text-weight-light">
              Martes, jueves y viernes <br/>de 12:55 a 15:05
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
