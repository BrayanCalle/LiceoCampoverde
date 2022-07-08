<template>
  <div>
    <q-avatar class="fit cursor-pointer" clickable v-ripple
      @click="modal = true">
      <img src="figuras/+.svg" class="fit">
    </q-avatar>

    <q-dialog v-model="modal" persistent>
      <div flat class="bg-transparent" style="max-width: 100% !important;">
        <div class="buttom_close_video row justify-end">
          <q-btn round icon="clear" color="black" @click="modal = false" />
        </div>

        <div class="bg-white" style="width:100%; height:90%">
         <div class="row" style="height: 40vh;">
          <div class="col-6 q-px-xl q-py-xl" style="height: 100%;">
            <p class="text-h4 text-weight-bold text-center q-py-xl">Horario</p>
          </div>
          <div class="col-6 bg-primary" style="height: 100%;">
            <img width="100%" height="100%" src="/figuras/F-C-7.svg" alt="imagen"/>
          </div>
         </div>
         <div class="row q-py-sm">
          <div class="col-4 q-py-sm">
            <p class="text-h5 q-px-xl text-weight-bold">Hora de ingreso:
              <br/>
              <span class="text-h5 text-weight-light">8:20</span>
            </p>
          </div>
          <div class="col-4 q-py-sm">
            <p class="text-h5 text-weight-bold">Hora de clases: </p>
            <p class="text-h4 text-weight-light">Lunes a Viernes <br/>8:20 a 12:45</p>
          </div>
          <div class="col-4 q-py-sm">
            <p class="text-h5 text-weight-bold">Horario Club Campito:</p>
            <p class="text-h4 text-weight-light">Lunes y miércoles de 12:55 a 16:05</p>
            <p class="text-h4 text-weight-light">Martes, jueves y viernes de 12:55 a 15:05</p>
          </div>
         </div>
        </div>
      </div>
    </q-dialog>
  </div>
</template>
<script>
export default {
  name: 'modal-horarios',
  data () {
    return {
      modal: false
    }
  }
}
</script>
