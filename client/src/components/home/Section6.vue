<template>
  <div class="full-width contenedor_section5">
    <div class="absolute-full web_element">
      <div class="row justify-end bg-transparent img_cover">
        <div class="col-8">
          <q-img src="home/F-servicios.svg" style="height:100vh" />
        </div>
      </div>
    </div>

    <div class="height_section2 row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 contenedor_section6 q-pa-xl text-weight-bolder">
        <div class="title_1">
          <div class=" my-font-ultra bg-secondary text-white q-px-md">Campito</div>
          <div class="my-font-ultra">2-4 años</div>
          <q-chip class="my-font text-weight-regular cursor-pointer" style="font-size: 2vh; z-index:99" color="secondary"
            text-color="white" icon-right="add" clickable @click="$router.push({ name: 'campito' })">
            Conocer
          </q-chip>
        </div>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="paralax_section block1 ">
          <img src="home/F-servicios.svg" class="img_in" style="height:100%; width:auto" />
        </div>
      </div>
    </div>

    <div class="height_section2 row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 contenedor_section6 q-pa-xl text-weight-bolder">
        <div class="title_1 my-font-ultra">
          <div>Educación <br><b class="bg-primary text-white q-px-md">básica</b></div>
          <div>5-15 años</div>
          <q-chip color="primary" class="my-font text-weight-regular cursor-pointer" style="font-size: 2vh; z-index:99"
            text-color="white" icon-right="add" clickable @click="$router.push({ name: 'basic' })">
            Conocer
          </q-chip>
        </div>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="paralax_section block2">
          <img src="home/F-servicios.svg" class="img_in" style="height:100%; width:auto" />
        </div>
      </div>
    </div>

    <div class="height_section2 row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 contenedor_section6 q-pa-xl text-weight-bolder">
        <div class=" my-font-ultra title_1">
          <div class="bg-accent text-white q-px-md">Bachillerato</div>
          <div>16-18 años</div>
          <q-chip class="my-font text-weight-regular cursor-pointer" style="font-size: 2vh; z-index:99" color="accent"
            text-color="white" icon-right="add" clickable @click="$router.push({ name: 'bachiller' })">
            Conocer
          </q-chip>
        </div>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="paralax_section block3">
          <img src="home/F-servicios.svg" class="img_in" style="height:100%; width:auto" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'section-6',
  components: {
  }
}
</script>
<style lang="scss" scoped>
.block1 {
  background-image: url('../../../public/home/prekinder-campus-moderno.jpg');
}
.block2 {
  background-image: url('../../../public/home/escuela-campus-moderno.jpg');
}
.block3 {
  background-image: url('../../../public/home/bachillerato-campus-moderno.jpg');
}
</style>
