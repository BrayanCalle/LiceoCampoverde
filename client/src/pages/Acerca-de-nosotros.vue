<template>
    <q-page>
        <section class="banner-acerca-de-nosotros">
            <div class="container-texto-banner--acerca-de-nosotros">
                <p class="texto-banner--acerca-de-nosotros">
                    Acerca de <br> nosotros, <br>nuestra <span>motivación</span>
                </p>
            </div>
            <div class="container-imagen-banner--acerca-de-nosotros">
                <img src="../assets/img/Figuras/F-N-1.svg" alt="">
            </div>
        </section>
        <!-- Sección 2 Misión -->
        <section class="seccion2--acerca-de-nosotros">
            <div class="mitad-izquierda-seccion2--acerca-de-nosotros">
                <div class="mitad-arriba-mitad-izquierda-seccion2--acerca-de-nosotros">
                    <div class="container-texto-mitad-arriba-mitad-izquierda-seccion2--acerca-de-nosotros">
                        <div class="container-mision">
                            <div class="mision">Misión</div>
                        </div>
                        <div class="container-educamos">
                            <p>Educamos desde <br> otro punto de <br> vista.</p>
                        </div>
                    </div>
                </div>
                <div class="mitad-abajo-mitad-izquierda-seccion2--acerca-de-nosotros">
                    <div class="container-texto--mitad-abajo-mitad-izquierda-seccion2--acerca-de-nosotros">
                        <p>
                            Principios <br>
                            <span>educativos</span>
                        </p>
                        <ul>
                            <li>1. Partir del nivel de desarrollo del estudiante.</li>
                            <li>2. Asegurar la construcción de aprendizajes significativos.</li>
                            <li>3. Aprender a aprender.</li>
                            <li>4. Modificar los esquemas de conocimiento.</li>
                            <li>5. Realizar una intensa actividad por parte del alumno.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mitad-derecha-seccion2--acerca-de-nosotros">
                <div class="container-vision">
                    <div class="container-vision-titulo">
                        <p>Visión</p>
                    </div>
                    <div class="container-vision-texto">
                        <p>Ser, para el año 2023, una institución valorada por su prestigio educativo,
                            reconocida por su constante innovación didáctica.
                        </p>
                        <p>
                            El desarrollo de sus prácticas educativas bajo un marco metodológico diferenciador,
                            unificado, compartido y coordinado para la formación permanente de individuos que
                            trascienden y transforman los ámbitos personales, sociales, ambientales y culturales
                            en los que se desenvuelvan.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 3 -->
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
                            <q-carousel infinite autoplay v-model="slide" swipeable animated
                                :navigation-position="navPos" navigation padding
                                class="bg-black text-white carousel-cuadrado">
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
        <!-- Sección 4 -->
        <section class="container section-4 q-pa-xl">
            <div class="mitad-arriba--section-4">
                <p class="titulo--section-4">
                    Valores <br> <span>corporativos</span>
                </p>
            </div>
            <div class="mitad-abajo--section-4 window-height ">
                <div class="container q-pa-xl">
                    <div class="row q-pa-md">
                        <div class="col-lg-4 conatainer-texto--section-4">
                            <p>
                                Responsabilidad, <b>ética, honestidad y transparencia,</b> como
                                 el nivel más alto de compromiso y de profesionalidad.
                            </p>
                        </div>
                        <div class="col-lg-2 container-circulo-numeros--section-4 container-circulo-numeros-impares--section-4">
                            <div id="circulo1" class="circulo-numeros--section-4">
                                <p>1.</p>
                            </div>
                        </div>
                        <div class="col-lg-2 container-circulo-numeros--section-4 container-circulo-numeros-pares--section-4">
                            <div id="circulo2" class="circulo-numeros--section-4">
                                <p>2.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 conatainer-texto--section-4">
                            <p>
                                Actualización y formación continua, investigación
                                 pedagógica e innovación
                            </p>
                        </div>
                    </div>
                    <!-- Fila 2 -->
                    <div class="row q-pa-md">
                        <div class="col-lg-4 conatainer-texto--section-4">
                            <p>
                                Reconocimiento y <b>respeto por la diversidad</b> para
                                 garantizar las mismas oportunidades de aprendizaje.
                            </p>
                        </div>
                        <div class="col-lg-2 container-circulo-numeros--section-4 container-circulo-numeros-impares--section-4">
                            <div id="circulo3" class="circulo-numeros--section-4">
                                <p>3.</p>
                            </div>
                        </div>
                        <div class="col-lg-2 container-circulo-numeros--section-4 container-circulo-numeros-pares--section-4">
                            <div id="circulo4" class="circulo-numeros--section-4">
                                <p>4.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 conatainer-texto--section-4">
                            <p>
                                Calidad en procesos para asegurar el cumplimiento de los objetivos de la
                                organización con <b>eficiencia, eficacia y pertinencia.</b>
                            </p>
                        </div>
                    </div>
                    <!-- Fila 3 -->
                    <div class="row q-pa-md">
                        <div class="col-lg-4 conatainer-texto--section-4">
                            <p>
                                <b>Calidez y buen trato,</b> condiciones imprescindibles
                                 en toda relación humana.
                            </p>
                        </div>
                        <div class="col-lg-2 container-circulo-numeros--section-4 container-circulo-numeros-impares--section-4">
                            <div id="circulo5" class="circulo-numeros--section-4">
                                <p>5.</p>
                            </div>
                        </div>
                        <div class="col-lg-2 container-circulo-numeros--section-4 container-circulo-numeros-pares--section-4">
                            <div id="circulo6" class="circulo-numeros--section-4">
                                <p>6.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 conatainer-texto--section-4">
                            <p>
                                <b>Solidaridad</b> para una convivencia cordial mediante la <b>participación activa,
                                 respetuosa y eficaz</b> en la sociedad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 5 -->
        <section class="window-height section5">
            <div class="container">
                <div class="container-parte-izquierda--section5">
                    <div class="parte-izquierda--section5">
                        <img src="../assets/img/Figuras/F-N-3.svg" alt="">
                    </div>
                </div>
                <div class="container-parte-derecha--section5">
                    <div class="parte-derecha--section5">
                        <div class="parte-arriba-parte-derecha--section5">
                            <p class="titulo-parte-derecha--section5">Idiomas</p>
                            <p class="texto-parte-derecha--section5">
                                Los idiomas extranjeros cobran auge ya que la internacionalización, así como el desarrollo científico y
                                tecnológico, exigen que los estudiantes adquieran herramientas para enfrentar
                                los retos de la globalización.
                            </p>
                        </div>
                        <div class="parte-abajo-parte-derecha--section5">
                            <p class="titulo-parte-abajo-parte-derecha--section5"><b>Nuestros estudiantes egresan preparados en tres idiomas:</b></p>
                            <ul>
                                <li>Español (C2)*</li>
                                <li>Inglés (Bilingüe, B2-C1)*</li>
                                <li>Francés (Suficiencia B1-B2)</li>
                            </ul>
                            <p>*Cuadro común europeo de uso de Lenguas</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 6 -->
        <section class="window-height section6">
            <div class="parte-izquierda--section6">
                <div class="row">
                    <p>Modelo <span>pedagógico</span></p>
                </div>
                <div class="">
                </div>
            </div>
            <div class="parte-derecha--section6">
                <img src="../assets/img/Figuras/F-N-4.svg" alt="">
            </div>
        </section>

    </q-page>
</template>

<style lang="scss" scoped >
@import 'src/css/app.scss';

.banner-acerca-de-nosotros{
    height:100%;
    width:100%;
    display: flex;
}
.container-texto-banner--acerca-de-nosotros{
    width: 50%;
    justify-content: flex-end;
    align-items: center;
    display: flex;
}

.container-texto-banner--acerca-de-nosotros{
    font-family:  Gotham;
    color: $negro;
}

.texto-banner--acerca-de-nosotros{
    letter-spacing: 0px;
    width: 504px;
    height: 371.46px;
    font-family: Gotham;
    font-weight: 900;
    font-size: 62px;
    line-height: 60px;
    text-align: left;

}

.texto-banner--acerca-de-nosotros > span{
    background-color: $amarillo;
}

.container-imagen-banner--acerca-de-nosotros{
    width: 50%;
    display: flex;
    justify-content: flex-end;
    height: 100vh;
}

.container-imagen-banner--acerca-de-nosotros > img{
    width: 100%;
    height: 100%;
}
// Sección 2
.seccion2--acerca-de-nosotros{
    display: flex;
    height: 100vh;
}

.mitad-izquierda-seccion2--acerca-de-nosotros{
    width: 50%;
    display: flex;
    flex-direction: column;
}

.mitad-arriba-mitad-izquierda-seccion2--acerca-de-nosotros{
    height: 50%;
    background-color: $celeste;
    color: $blanco;
    display: flex;
    justify-content: flex-end;
}

.container-texto-mitad-arriba-mitad-izquierda-seccion2--acerca-de-nosotros{
    height: 100%;
    display: flex;
    flex-direction: column;
    width: 75%;
}

.container-mision{
    height: 50%;
    display: flex;
    align-items: center;
}

.container-educamos{
    height: 50%;
}
.container-educamos >p{
    font-size: 20px;
    line-height: 27px;
}

.mitad-arriba-mitad-izquierda-seccion2--acerca-de-nosotros > p{
    font-size: 20px;
}

.container-texto--mitad-abajo-mitad-izquierda-seccion2--acerca-de-nosotros{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    height: 100%;
    width: 75%;
}

.mision{
    width: fit-content;
    height: fit-content;
    padding: 0px 22px;
    font-weight: 900;
    font-size: 35px;
    border-radius: 33px;
    background: transparent;
    border: 7px solid $morado;
}

.mitad-abajo-mitad-izquierda-seccion2--acerca-de-nosotros{
    height: 50%;
    background-color: $azul-oscuro;
    color: $blanco;
    display: flex;
    justify-content: flex-end;
}

.container-texto--mitad-abajo-mitad-izquierda-seccion2--acerca-de-nosotros > p{
    font-weight: 900;
    font-size: 35px;
}

.container-texto--mitad-abajo-mitad-izquierda-seccion2--acerca-de-nosotros > p > span{
    height: fit-content;
    padding: 0px 22px;
    font-weight: 900;
    font-size: 35px;
    border-radius: 33px;
    background: transparent;
    border: 7px solid #8255A5;
    width: fit-content;
}

.container-texto--mitad-abajo-mitad-izquierda-seccion2--acerca-de-nosotros > ul{
    padding-left: 0px;
}

.container-texto--mitad-abajo-mitad-izquierda-seccion2--acerca-de-nosotros > ul > li{
    font-size: 16px;
    line-height: 27px;
    list-style: none;
}

.mitad-derecha-seccion2--acerca-de-nosotros{
    width: 50%;
    background-color: $gris;
    display: flex;
    justify-content: center;
}

.container-vision{
    width: 60%;
    display: flex;
    justify-content: flex-end;
    flex-direction: column;
}
.container-vision-titulo{
    height: 25%;
    display: flex;
    align-items: center;
}

.container-vision-titulo > p{
    height: fit-content;
    padding: 0px 22px;
    font-weight: 900;
    font-size: 35px;
    border-radius: 33px;
    background: transparent;
    border: 7px solid #8255A5;
    width: fit-content;
}

.container-vision-texto{
    height: 75%;
}

.container-vision-texto > p:nth-child(1){
    height: 35%;
    font-size: 20px;
    line-height: 27px;
}

.container-vision-texto > p:nth-child(2){
    font-size: 16px;
    line-height: 20px;
}

// Section 3
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
    background-image: url(../assets/img/Figuras/F-N-2.svg);
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

// < =================== Sección4 =================== >
.section-4{
    margin-top: 12em;
    background-color: #F2F2F2;
}

.titulo--section-4{
    font-size: 35px;
    font-weight: 900;
    line-height: 40px;
}

.titulo--section-4 > span{
    background-color: #F9D938;
    padding: 0 10px;
}

.circulo-numeros--section-4{
    width: 190px;
    height: 190px;
    border-radius: 50%;
    background-color: red;
    display: flex;
    justify-content: center;
    align-items: center;
}

#circulo1{
    background-color: $amarillo;
}

#circulo2{
    background-color: $verde;
}

#circulo3{
    background-color: $naranja;
}

#circulo4{
    background-color: $negro;
    color: $blanco;
}

#circulo5{
    background-color: $morado;
}

#circulo6{
    background-color: $celeste;
}

.container-circulo-numeros--section-4{
    display: flex;
    align-items: center;
}

.container-circulo-numeros-impares--section-4{
    justify-content: flex-end;
}

.container-circulo-numeros-pares--section-4{
    justify-content: flex-start;
}

.circulo-numeros--section-4 > p{
    font-size: 100px;
}

.conatainer-texto--section-4{
    display: flex;
    justify-content: center;
    align-items: center;
}

.conatainer-texto--section-4 > p{
    font-size: 20px;
    padding: 0 85px;
}

// < =================== Sección5 =================== >
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
    align-items: center;
}

.parte-derecha--section5{
    height: 70%;
    width: 80%;
    padding-right: 103px;
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

// < =================== Sección6 =================== >

.section6{
    background-color: $verde;
    display: flex;
}

.parte-izquierda--section6{
    width: 70%;
}

.parte-derecha--section6{
    width: 30%;
    display: flex;
    justify-content: flex-end;
}

.parte-derecha--section6 > img{
    height:100%
}

</style>

<script>
import { ref } from 'vue'

export default {
  setup () {
    return {
      navPos: ref('bottom'),
      slide: ref('style'),
      lorem: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo.'
    }
  }
}
</script>
