<template>
  <div class="padding_section4">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 img order_img">
        <img src="bachillerato/colegio-quito-cumbaya-espacios.jpg" class="fit" />
      </div>
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 img">
        <div class="card fit text-white text-bold text_zise my-font-ultra">
          <div>
            Nuestra <br>
            infraestructura <br class="web_element"> es <br class="mobile_element">
            parte de <br class="web_element"> nuestra <br>
            <b class="bg-accent q-px-sm">esencia</b>
          </div>
          <q-chip color="accent" text-color="white" size="calc(0.3em + 0.6vh)" @click="openModal = true" clickable>
            Tour Virtual 360
          </q-chip>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 img">
        <img src="bachillerato/colegio-particular-quito-ecuador.jpg" class="fit" />
      </div>
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 column">
        <div class="col-6 img">
          <img src="bachillerato/liceo-campover-colegio.jpg" class="fit" />
        </div>
        <div class="col-6 img">
          <img src="bachillerato/colegio-en-quito-con-bachillerato-internacional.jpg" class="fit" />
        </div>
      </div>
    </div>

    <q-dialog v-model="openModal" full-width>
      <div class="row justify-end q-pa-sm absolute-top-right" style="z-index: 99">
        <q-btn round icon="clear" color="black" @click="openModal = false" />
      </div>
      <q-card style="height:100%; width: 100%">
        <iframe
          width="100%"
          height="100%"
          src="https://guiap.com/360/campoverde/">
        </iframe>
      </q-card>
    </q-dialog>
  </div>
</template>

<script>
export default {
  data () {
    return {
      openModal: false
    }
  },
  methods: {
    openLink () {
      window.open('https://guiap.com/folio/liceo-campoverde/', '_blank')
    }
  }
}
</script>
