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
          <div class="col-6 q-px-xl q-py-xl text-center">
            <p class="text-h4">Idioma</p>
          </div>
          <div class="col-12 col-md-6 bg-info">
            <img width="50%" style="margin: auto ; display: flex;" src="figuras/F-C-9.svg" alt="imagen"/>
          </div>
        </div>
        <div class="row q-py-sm padding_reponsive">
          <div class="col-md-3 col-12">
            <p class="text-h5 q-px-xl text-weight-bold">Nuestros estudiantes egresan preparados en tres idiomas:</p>
          </div>
          <div class="col-md-3 col-12">
            <p class="text-weight-bold">Español <span  style="display: block; font-weight: 400;">(C2)*</span></p>
            <p>Capacitado para realizar tareas complejas de trabajo y estudio en el idioma español.</p>
          </div>
          <div class="col-md-3 col-12">
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
          <div class="col-md-3 col-12">
            <p class="text-weight-bold">Francés <span style="display: block; font-weight: 400;">
              (Suficiencia B1-B2)
            </span></p>
            <p>Cuenta con fluidez e independencia para comunicarse sin esfuerzo con hablantes nativos franceses.</p>
          </div>
          <p class="text-h6 text-weight-light q-px-xl">*Cuadro común europeo de uso de Lenguas</p>
         </div>
      </q-card>
    </q-dialog>
  </div>
</template>

<script>
export default {
  name: 'modal-4',
  data () {
    return {
      videoModal: false
    }
  }
}
</script>
