<template>
  <div class="column no-wrap justify-end window-height">
    <div class="row no-wrap justify-between height_mobile_section1">
      <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
        <img src="home/escuela-particular-en-cumbaya-liceo-campoverde-quito.png" class="full-height web_change_img" />
        <img src="home/escuelas-innovadoras-enquito-cumbaya.png" class="full-height mobile_change_img" />
      </div>

      <div class="row justify-center items-end col-xs-2 col-sm-4 col-md-4 col-lg-4">
        <div class="text_section1_mobile column items-center">
          <div class="text-h5 text-weight-bolder text-center cursor-pointer border_blue_rounded q-px-md">Educamos</div>
          <div @mouseenter="change = true" @mouseout=" change = false">
            <div v-if="!change" class="text-h5 text-weight-bolder text-center">
              Desde otro <br> punto de vista
            </div>
            <div v-else class="text-h5 text-weight-bolder text-center">
              en inglés, <br> español y francés
            </div>
          </div>
        </div>
        <img src="figuras/F-5.svg" style="width:300px" class="self-end" />
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
      change: false
    }
  }
}
</script>
