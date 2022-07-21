<template>
    <section class="window-height section3">
        <div class="container">
            <div class="titulo-section3 q-pt-xl my-font-black" data-aos="fade-right" data-aos-duration="1500">
                <p>Valores <br> vinculados al</p>
                <p>aprendizaje</p>
            </div>
            <div class="cuerpo-section3" data-aos="fade-up" data-aos-duration="2000">
                <div class="container-imagen-cuerpo-section3">
                    <!-- <img src="../assets/img/Figuras/F-N-2.svg" alt=""> -->
                </div>
                <div class="mv-container-imagen-circulo"></div>
                <div class="container-carousel">
                    <div class="q-pa-md">
                        <div class="title-slider my-font-black">
                            Educamos:
                        </div>
                        <q-carousel infinite autoplay v-model="slide" swipeable animated :navigation-position="navPos"
                            navigation padding class="bg-black text-white carousel-cuadrado">
                            <q-carousel-slide name="style" class="column no-wrap flex-center">
                                <div class="q-mt-md text-center texto-slider my-font-medium">
                                    Con sentido de <br>trascendencia.
                                </div>
                            </q-carousel-slide>
                            <q-carousel-slide name="tv" class="column no-wrap flex-center">
                                <div class="q-mt-md text-center texto-slider my-font-medium">
                                    Con responsabilidad social y ambiental.
                                </div>
                            </q-carousel-slide>
                            <q-carousel-slide name="layers" class="column no-wrap flex-center">
                                <div class="q-mt-md text-center texto-slider my-font-medium">
                                    Para aprender continuamente.
                                </div>
                            </q-carousel-slide>
                            <q-carousel-slide name="map" class="column no-wrap flex-center">
                                <div class="q-mt-md text-center texto-slider my-font-medium">
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
@import 'src/css/colores.scss';
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
    height: 64vh;
    width: 64vw;
    position: absolute;
    background-image: url(../../assets/img/Figuras/F-N-2.svg);
    background-size: contain;
    background-repeat: no-repeat;
    margin-left: 9.5em;
}

.container-carousel{
    position: absolute;
    display: flex;
    width: 66vw;
    justify-content: flex-end;
    height: 50vh;
    align-items: flex-end;

}

.carousel-cuadrado{
    width: 300px;
    height: 150px;
    padding: 10px 25px;
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

@media (min-width: 768px) and (max-width: 1025px) {
    .container-carousel{
        width: 76vw;
        height: 34vh;
    }
    .carousel-cuadrado{
        width: 290px;
    }
}

@media (min-width: 768px) {
    .mv-container-imagen-circulo{
        display: none;
    }
}

@media (max-width:768px) {
    .titulo-section3 > p:first-child{
        font-size: 32px;
        line-height: 30px;
    }
    .titulo-section3 > p:nth-child(2){
        font-size: 28px;
        padding: 0px 10px;
    }

    .container-imagen-cuerpo-section3{
        margin-top: 30px;
        background-image: url(../../assets/img/Figuras/F-N-P2.svg);
        margin-left: 0px;
    }

    .container-imagen-cuerpo-section3{
        width: 96vw;
        position: relative;
        height: 50vh;
    }

    .container-carousel{
        height: fit-content;
        position: absolute;
        margin-top: -325px;
        margin-right: auto;
        margin-left: 90px;
    }

    .mv-container-imagen-circulo{
        background-image: url(../../assets/img/Figuras/F-4.svg);
        width: 100%;
        background-size: 100%;
        background-repeat: no-repeat;
        position: relative;
        height: 391px;
    }

    .section3{
        height: 100% !important;
        margin-bottom: 20px;
    }

    .section > .container{
        margin-bottom: 60px;
    }

}

@media (max-width: 380px) {
    .container-carousel{
        margin-top: -345px !important;
    }

    .carousel-cuadrado{
        width: 290px;
        height: 158px;
    }

}

@media (min-width: 350px) and (max-width: 365px) {
    .container-carousel{
        margin-top: -355px !important;
        margin-left: 75px;
    }

    .carousel-cuadrado{
        padding: 5px 10px;
        width: 263px;
        height: 158px;
    }
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
