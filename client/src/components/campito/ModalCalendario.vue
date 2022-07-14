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
            <p class="text-h4 text-weight-bold text-center q-py-xl">Calendario de actividades</p>
          </div>
          <div class="col-6 bg-primary" style="height: 100%;">
            <img width="100%" height="100%" src="/figuras/F-C-9.svg" alt="imagen"/>
          </div>
         </div>
         <div class="calendary">
          <div class="" style="max-width: 300px">
              <q-input filled v-model="date" mask="date" :rules="['date']">
                <template v-slot:append>
                  <q-icon name="event" class="cursor-pointer">
                    <q-popup-proxy cover transition-show="scale" transition-hide="scale">
                      <q-date v-model="date">
                        <div class="row items-center justify-end">
                          <q-btn v-close-popup label="Close" color="primary" flat />
                        </div>
                      </q-date>
                    </q-popup-proxy>
                  </q-icon>
                </template>
              </q-input>
            </div>
         </div>
         <div class="row q-py-sm">
           <div class="col-12 q-pa-md">
            <q-carousel
              v-model="slide"
              transition-prev="slide-right"
              transition-next="slide-left"
              swipeable
              animated
              control-color="primary"
              padding
              arrows
              height="auto"
              class=""
            >
             <q-carousel-slide :name="1" class="column">
                <div  class="text-center text-weight-bold text-h5" style="height: 22vh;">
                 <div class="bg-warning q-py-xl q-px-xl" style="margin: auto; width: 50%;">
                  <p> Miércoles</p>
                  <p>12</p>
                  <h4>12:00</h4>
                  <p>Minga general</p>
                 </div>
                </div>
              </q-carousel-slide>
               <q-carousel-slide :name="2" class="column">
                <div  class="text-center text-weight-bold text-h5" style="height: 22vh;">
                 <div class="bg-warning q-py-xl q-px-xl" style="margin: auto; width: 50%;">
                  <p> Jueves</p>
                  <p>13</p>
                  <h4>12:00</h4>
                  <p>Pristiños con miel. Bebida de avena. Fruta</p>
                 </div>
                </div>
              </q-carousel-slide>
            </q-carousel>
          </div>
         </div>
        </div>
      </div>
    </q-dialog>
  </div>
</template>

<script>
import { ref } from 'vue'

export default {
  name: 'modal-calendario',
  data () {
    return {
      modal: false
    }
  },
  setup () {
    return {
      slide: ref(1),
      date: ref('2019/02/01')
    }
  }
}
</script>
