<template>
    <section class="window-height section5">
        <div class="container">
            <div class="container-parte-izquierda--section5">
                <div class="parte-izquierda--section5">
                    <img src="../../assets/img/Figuras/F-N-3.svg" alt="">
                </div>
            </div>
            <div class="container-parte-derecha--section5">
                <div class="parte-derecha--section5">
                    <div class="parte-arriba-parte-derecha--section5">
                        <p class="titulo-parte-derecha--section5 my-font-black">Idiomas</p>
                        <p class="texto-parte-derecha--section5 my-font-medium">
                            Los idiomas extranjeros cobran auge ya que la internacionalización, así como el
                            desarrollo científico y
                            tecnológico, exigen que los estudiantes adquieran herramientas para enfrentar
                            los retos de la globalización.
                        </p>
                    </div>
                    <div class="parte-abajo-parte-derecha--section5">
                        <p class="titulo-parte-abajo-parte-derecha--section5 my-font-black"><b>Nuestros estudiantes egresan
                                preparados en tres idiomas:</b></p>
                        <ul class="my-font">
                            <li>Español (C2)*</li>
                            <li>Inglés (Bilingüe, B2-C1)*</li>
                            <li>Francés (Suficiencia B1-B2)</li>
                        </ul>
                        <p class="my-font">*Cuadro común europeo de uso de Lenguas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@import 'src/css/colores.scss';
.section5 > .container{
    display: flex;
    height: 100vh;
}

.container-parte-izquierda--section5{
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.parte-izquierda--section5{
    height: 90%;
}

.parte-izquierda--section5 > img {
    height: 100%;
}

.container-parte-derecha--section5{
    width: 50%;
    display: flex;
    justify-content: center;
    padding-top: 5%;
    align-items: flex-start;
}

.parte-derecha--section5{
    height: 70%;
    width: 100%;
    font-weight: 500;
}

.parte-abajo-parte-derecha--section5 > ul > li{
    font-size: 24px;
}

.titulo-parte-derecha--section5{
    width: fit-content;
    font-size: 32px;
    height: fit-content;
    padding: 0px 22px;
    font-weight: 900;
    font-size: 35px;
    border-radius: 33px;
    background: transparent;
    border: 7px solid #8255A5;
}

.texto-parte-derecha--section5{
    font-size: 26px;
    line-height: 27px;
    margin-top: 2em;
}

.titulo-parte-abajo-parte-derecha--section5{
    font-size: 28px;
    line-height: 28px;
}

.parte-abajo-parte-derecha--section5{
    margin-top: 3em;
}

@media (max-width: 1025px) {
    .container-parte-derecha--section5{
        padding-right: 10px;
        padding-left: 33px;
    }
}

@media (max-width: 768px) {

    .section5{
        height: 100% !important;
    }
    .section5 > .container{
        display: flex;
        flex-direction: column;
    }
    .container-parte-izquierda--section5{
        width: 100%;
    }

    .container-parte-derecha--section5{
        width: 100%;
    }

    .container-parte-izquierda--section5{
        height: 76vh;
    }

    .section5 > .container{
        height: 100%;
    }
}
</style>

<script>
export default {
  name: 'sec5adn'
}
</script>
