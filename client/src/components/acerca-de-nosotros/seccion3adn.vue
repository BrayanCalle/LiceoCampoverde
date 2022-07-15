<template>
    <section class="window-height section3">
        <div class="container">
            <div class="titulo-section3 q-pt-xl">
                <p>Valores <br> vinculados al</p>
                <p>aprendizaje</p>
            </div>
            <div class="cuerpo-section3">
                <div class="container-imagen-cuerpo-section3">
                    <!-- <img src="../assets/img/Figuras/F-N-2.svg" alt=""> -->
                </div>
                <div class="container-carousel">
                    <div class="q-pa-md">
                        <div class="title-slider">
                            Educamos:
                        </div>
                        <q-carousel infinite autoplay v-model="slide" swipeable animated :navigation-position="navPos"
                            navigation padding class="bg-black text-white carousel-cuadrado">
                            <q-carousel-slide name="style" class="column no-wrap flex-center">
                                <div class="q-mt-md text-center texto-slider">
                                    Con sentido de <br>trascendencia.
                                </div>
                            </q-carousel-slide>
                            <q-carousel-slide name="tv" class="column no-wrap flex-center">
                                <div class="q-mt-md text-center texto-slider">
                                    Con responsabilidad social y ambiental.
                                </div>
                            </q-carousel-slide>
                            <q-carousel-slide name="layers" class="column no-wrap flex-center">
                                <div class="q-mt-md text-center texto-slider">
                                    Para aprender continuamente.
                                </div>
                            </q-carousel-slide>
                            <q-carousel-slide name="map" class="column no-wrap flex-center">
                                <div class="q-mt-md text-center texto-slider">
                                    Para la autonomía y la autodeterminación.
                                </div>
                            </q-carousel-slide>
                        </q-carousel>
                    </div>
                </div>
            </div>
        </div>

    </section>
</template>

<style lang="scss" scoped>
@import 'src/css/app.scss';
.section3{
    display: flex;
    flex-direction: column;
}

.titulo-section3 > p:first-child{
    font-size: 35px;
    font-weight: 900;
    line-height: 40px;
    margin-bottom: 10px;
}

.titulo-section3 > p:nth-child(2){
    font-size: 35px;
    font-weight: 900;
    height: fit-content;
    padding: 0px 22px;
    border-radius: 0px;
    background: transparent;
    border: 7px solid $verde;
    width: fit-content;
}

.container-imagen-cuerpo-section3{
    height: 100vh;
    width: 82vw;
    position: absolute;
    background-image: url(../../assets/img/Figuras/F-N-2.svg);
    background-size: contain;
    background-repeat: no-repeat;
}

.container-carousel{
    position: absolute;
    display: flex;
    width: 72vw;
    justify-content: flex-end;
    height: 60vh;
    align-items: flex-end;

}

.carousel-cuadrado{
    width: 300px;
    height: 150px;
    padding: 10px 35px;
}

.title-slider{
    color: white;
    text-align: left;
    padding-left: 44px;
    font-size: 35px;
}

.slide-individual{
    padding-bottom: 10px;
}

.texto-slider{
    font-size: 20px;
    margin-bottom: 27px;
}
</style>

<script>
import { ref } from 'vue'

export default {
  name: 'sec3adn',
  setup () {
    return {
      navPos: ref('bottom'),
      slide: ref('style')
    }
  }
}
</script>
