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
            <p class="text-h4 text-weight-bold text-center q-py-xl">Idiomas</p>
          </div>
          <div class="col-6 bg-primary" style="height: 100%;">
            <img width="100%" height="100%" src="/figuras/F-C-7.svg" alt="imagen"/>
          </div>
         </div>
         <div class="row q-py-sm">
          <div class="col-3">
            <p class="text-h5 q-px-xl text-weight-bold">Nuestros estudiantes egresan preparados en tres idiomas:</p>
          </div>
          <div class="col-3">
            <p class="text-weight-bold">Español <span  style="display: block; font-weight: 400;">(C2)*</span></p>
            <p>Capacitado para realizar tareas complejas de trabajo y estudio en el idioma español.</p>
          </div>
          <div class="col-3">
            <p class="text-weight-bold">Inglés <span style="display: block; font-weight: 400;">(Bilingüe, B2-C1)*</span></p>
            <p>Capacitado para realizar tareas complejas de trabajo y estudio en el idioma inglés.</p>
            <p class="text-weight-bold">Porcentaje de clases en inglés:</p>
            <ul class="campito_list">
              <li><span class="text-weight-bold">Inicial:</span> Porcentaje de clases en inglés:</li>
              <li><span class="text-weight-bold">Básica Elemental y Media:</span> 40% inglés - 60% español</li>
              <li><span class="text-weight-bold">Básica Superior:</span> 60% inglés - 40% español</li>
              <li><span class="text-weight-bold">Bachillerato:</span> 70% inglés - 30% español</li>
            </ul>
          </div>
          <div class="col-3">
            <p class="text-weight-bold">Francés <span style="display: block; font-weight: 400;">
              (Suficiencia B1-B2)
            </span></p>
            <p>Cuenta con fluidez e independencia para comunicarse sin esfuerzo con hablantes nativos franceses.</p>
          </div>
          <p class="text-h6 text-weight-light q-px-xl">*Cuadro común europeo de uso de Lenguas</p>
         </div>
        </div>
      </div>
    </q-dialog>
  </div>
</template>

<script>
export default {
  name: 'modal-idiomas',
  data () {
    return {
      modal: false
    }
  }
}
</script>
