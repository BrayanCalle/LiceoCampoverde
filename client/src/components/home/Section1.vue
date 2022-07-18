<template>
  <div class="column no-wrap justify-end window-height">
    <div class="row no-wrap justify-between height_mobile_section1">
      <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
        <img src="home/escuela-particular-en-cumbaya-liceo-campoverde-quito.png" class="full-height web_change_img" />
        <img src="home/escuelas-innovadoras-enquito-cumbaya.png" class="full-height mobile_change_img" />
      </div>

      <div class="row justify-center items-end col-xs-2 col-sm-4 col-md-4 col-lg-4">
        <div class="text_section1_mobile column items-center justify-start title_1 my-font-ultra">
          <div class="column items-start no-wrap zone_text_section1">
            <div class="cursor-pointer">Educamos <br> seres <br> humanos</div>
            <div>
              <div v-if="change === 1" class="fondo_amarillo">
                <b>auténticos.</b>
              </div>
              <div v-if="change === 2" class="fondo_amarillo">
                <b>que sienten.</b>
              </div>
              <div v-if="change === 3">
                <b class="fondo_amarillo">que piensan</b> <br> con libertad.
              </div>
            </div>
          </div>
        </div>
        <img src="figuras/F-5.svg" style="width: calc(30em + 2.6vw); max-width:90vw" class="self-end" />
      </div>

      <div class="row justify-end col-xs-5 col-sm-4 col-md-4 col-lg-4">
        <img src="home/colegio-privado-en-cumbaya-y-tumbaco.png" class="full-height web_change_img" style="z-index:-1" />
        <img src="home/high-schools-in-ecuador.png" class="full-height mobile_change_img" style="z-index:-1" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'section-1',
  data () {
    return {
      change: 1,
      timeCounter: ''
    }
  },
  created () {
    this.timeCounter = setInterval(this.activeChange, 3000)
  },
  methods: {
    activeChange () {
      this.change = this.change === 3 ? 1 : this.change + 1
    }
  },
  beforeDestroy () {
    clearInterval(this.timeCounter)
  }
}
</script>
