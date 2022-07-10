<template>
  <div class="">
    <div class="row justify-end">
      <q-parallax
        class=""
        :speed="0.9"
      >
        <template v-slot:media>
          <img src="home/liceo-campoverde.jpg" style="width:50%">
        </template>

        <template v-slot:content>
          <div class="column items-center">
            <div class="text-h3 text-white text-center">hola</div>
          </div>
        </template>
      </q-parallax>
    </div>
  </div>
</template>
