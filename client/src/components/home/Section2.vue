<template>
  <div class="row no-wrap justify-between" :style="`height: ${windowHeight}px`">
    <div>
      <img src="home/escuela-particular-en-cumbaya-liceo-campoverde-quito.png" style="height:100%" />
    </div>
    <div class="row justify-center items-end">
      <div class="text-h5 text-bold text-center col-12">Educamos</div>
      <img src="figuras/F-5.svg" style="width:300px" class="self-end" />
    </div>
    <div>
      <img src="home/colegio-privado-en-cumbaya-y-tumbaco.png" style="height:100%" />
    </div>
  </div>
</template>

<script>
export default {
  name: 'section-1',
  data () {
    return {
      windowHeight: window.innerHeight
    }
  }
}
</script>
