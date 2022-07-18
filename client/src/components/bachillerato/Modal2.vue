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
        <div class="row q-pb-sm">
          <div class="col-12 col-md-6 q-px-xl q-py-xl text-center">
            <p class="text-h4 text-center text-weight-bold">Calendario <br/>de actividades</p>
          </div>
          <div class="col-12 col-md-6 bg-dark">
            <p class="q-pl-xl text-h1 lyrics_modal A">A</p>
          </div>
        </div>
        <input type="date" class="q-py-sm q-px-sm" style="margin: auto; display: flex; justify-content: center;"/>
        <div class="row">
          <div class="col-12 q-px-xl text-justify">
            <coursel-1/>
          </div>
        </div>
      </q-card>
    </q-dialog>
  </div>
</template>

<script>
import Coursel1 from './Coursel1.vue'

export default {
  name: 'modal-2',
  components: {
    Coursel1
  },
  data () {
    return {
      videoModal: false
    }
  }
}
</script>
