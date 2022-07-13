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
        <section class="section-4 q-pa-xl">
            <div class="container">
                <div class="mitad-arriba--section-4">
                    <p class="titulo--section-4">
                        Valores <br> <span>corporativos</span>
                    </p>
                </div>
                <div class="mitad-abajo--section-4 ">
                    <div class="container q-pa-xl">
                        <div class="row q-pa-md">
                            <div class="col-md-4 conatainer-texto--section-4">
                                <p>
                                    Responsabilidad, <b>ética, honestidad y transparencia,</b> como
                                    el nivel más alto de compromiso y de profesionalidad.
                                </p>
                            </div>
                            <div
                                class="col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-impares--section-4">
                                <div id="circulo1" class="circulo-numeros--section-4">
                                    <p>1.</p>
                                </div>
                            </div>
                            <div
                                class="col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-pares--section-4">
                                <div id="circulo2" class="circulo-numeros--section-4">
                                    <p>2.</p>
                                </div>
                            </div>
                            <div class="col-md-4 conatainer-texto--section-4">
                                <p>
                                    Actualización y formación continua, investigación
                                    pedagógica e innovación
                                </p>
                            </div>
                        </div>
                        <!-- Fila 2 -->
                        <div class="row q-pa-md">
                            <div class="col-md-4 conatainer-texto--section-4">
                                <p>
                                    Reconocimiento y <b>respeto por la diversidad</b> para
                                    garantizar las mismas oportunidades de aprendizaje.
                                </p>
                            </div>
                            <div
                                class="col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-impares--section-4">
                                <div id="circulo3" class="circulo-numeros--section-4">
                                    <p>3.</p>
                                </div>
                            </div>
                            <div
                                class="col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-pares--section-4">
                                <div id="circulo4" class="circulo-numeros--section-4">
                                    <p>4.</p>
                                </div>
                            </div>
                            <div class="col-md-4 conatainer-texto--section-4">
                                <p>
                                    Calidad en procesos para asegurar el cumplimiento de los objetivos de la
                                    organización con <b>eficiencia, eficacia y pertinencia.</b>
                                </p>
                            </div>
                        </div>
                        <!-- Fila 3 -->
                        <div class="row q-pa-md">
                            <div class="col-md-4 conatainer-texto--section-4">
                                <p>
                                    <b>Calidez y buen trato,</b> condiciones imprescindibles
                                    en toda relación humana.
                                </p>
                            </div>
                            <div
                                class="col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-impares--section-4">
                                <div id="circulo5" class="circulo-numeros--section-4">
                                    <p>5.</p>
                                </div>
                            </div>
                            <div
                                class="col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-pares--section-4">
                                <div id="circulo6" class="circulo-numeros--section-4">
                                    <p>6.</p>
                                </div>
                            </div>
                            <div class="col-md-4 conatainer-texto--section-4">
                                <p>
                                    <b>Solidaridad</b> para una convivencia cordial mediante la <b>participación activa,
                                        respetuosa y eficaz</b> en la sociedad.
                                </p>
                            </div>
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
                                Los idiomas extranjeros cobran auge ya que la internacionalización, así como el
                                desarrollo científico y
                                tecnológico, exigen que los estudiantes adquieran herramientas para enfrentar
                                los retos de la globalización.
                            </p>
                        </div>
                        <div class="parte-abajo-parte-derecha--section5">
                            <p class="titulo-parte-abajo-parte-derecha--section5"><b>Nuestros estudiantes egresan
                                    preparados en tres idiomas:</b></p>
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
                    <p class="titulo-parte-izquierda--section6">Modelo <br> <span>pedagógico</span></p>
                </div>
                <div class="row">
                    <div class="col-7 container-texto-izquierda-parte-izquierda--section6">
                        <p>
                            Partimos de la individualidad y el respeto a la diversidad, en consecuencia el Sistema
                            Campoverde se basa en un modelo centrado en el estudiante y grupos colaborativos que
                            recoge diferentes metodologías.
                        </p>
                        <q-expansion-item class="sabermas-texto-izquierda-parte-izquierda--section6" dense dense-toggle
                            expand-separator expand-icon-class="text-dark" v-model="expanded" label="Saber más">
                            <q-card>
                                <q-card-section
                                    class="texto-interno-sabermas-texto-izquierda-parte-izquierda--section6">
                                    En esta concepción el estudiante es responsable de su proceso de aprendizaje, debe
                                    buscar información e interactuar con los contenidos de su curso, desarrollar un
                                    juicio crítico y tener la iniciativa de aprender continuamente lo que sea esencial
                                    para cumplir con las intenciones educativas; los estudiantes realizan actividades
                                    con otros compañeros y entre ellos construyen experiencias de aprendizaje que
                                    enriquecen los contenidos y el desarrollo de habilidades como el uso de tecnologías,
                                    trabajo en equipo, discusión de ideas, síntesis, análisis y juicios críticos, etc.,
                                    asimismo los estudiantes realizan actividades, bien con miembros de la comunidad
                                    institucional como fuera de ella que les permite enriquecer sus experiencias de
                                    aprendizaje, el desarrollo de habilidades sociales y ejercitar su compromiso de
                                    responsabilidad socio-ambiental.
                                </q-card-section>
                            </q-card>
                        </q-expansion-item>
                    </div>
                    <div class="col-5 container-texto-derecha-parte-izquierda--section6">
                        <p>
                            El aprendizaje constructivo implica que todas las actividades del estudiante
                            involucran procesos cognitivos activos.
                        </p>
                        <q-expansion-item class="sabermas-texto-derecha-parte-izquierda--section6" dense dense-toggle
                            expand-separator expand-icon-class="text-dark" v-model="expandeddos" label="Saber más">
                            <q-card>
                                <q-card-section class="texto-interno-sabermas-texto-derecha-parte-izquierda--section6">
                                    Estos procesos son: la creatividad, solución de problemas, razonamiento, toma de
                                    decisiones y evaluación. Además, los estudiantes están intrínsecamente motivados
                                    para aprender por la naturaleza significativa de aprendizaje ambiental y
                                    actividades.
                                </q-card-section>
                            </q-card>
                        </q-expansion-item>
                    </div>
                </div>
            </div>
            <div class="parte-derecha--section6">
                <img src="../assets/img/Figuras/F-N-4.svg" alt="">
            </div>
        </section>
        <!-- Section 7 -->
        <section class="window-height section7">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div>
                            <p class="titulos--section7">
                                Fortalezas individuales desarrollo afectivo
                            </p>
                            <ul class="textos--section7">
                                <li>Enfoque constructivista</li>
                                <li>Metacognición</li>
                                <li>Aprendizaje significativo<br>(conocimientos previos y motivación)</li>
                                <li>Pensamiento critico</li>
                                <li>Pensamiento divergente (creatividad)</li>
                            </ul>
                        </div>
                        <div class="q-mt-lg">
                            <p class="titulos--section7">
                                Rol protagónico<br>desarrollo sustentable
                            </p>
                            <ul class="textos--section7">
                                <li>Enfoque constructivista social</li>
                                <li>Globalización y transversalidad</li>
                                <li>Aprendizaje basado en proyectos</li>
                                <li>Investigación</li>
                                <li>Resolución de problemas</li>
                                <li>Tic's aplicadas a la educación </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4 container-imagen--section7">
                        <img src="../assets/img/Figuras/F-N-7.svg" alt="">
                    </div>
                    <div class="col-4 columna-container-parte-derecha--section7">
                        <div class="container-parte-derecha--section7">
                            <div>
                                <p class="titulos--section7">Rol protagónico desarrollo del Ecuador y el mundo</p>
                                <ul class="textos--section7">
                                    <li>Enfoques: histórico, cultural y constructivista </li>
                                    <li>Aprendizaje en colaboración</li>
                                    <li>Espacios de proyección social</li>
                                    <li>Estrategias de diferenciación e inclusión</li>
                                </ul>
                            </div>
                            <div class="q-mt-lg">
                                <p class="titulos--section7">Identidad y cultura</p>
                                <ul class="textos--section7">
                                    <li>Enfoques: histórico y Cultural</li>
                                    <li>Globalización: bilingüismo </li>
                                    <li>Investigación para la difusión</li>
                                    <li>Modelo de comunicación efectiva</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 8 -->
        <section class="window-height section8">
            <div class="parte-arriba--section8">
                <div class="parte-izquierda-parte-arriba--section8">
                    <div class="setentaporciento row">
                        <div class="col-6 container-pb-parte-izquierda-parte-arriba--section8">
                            <p>P<span>B</span></p>
                        </div>
                        <div class="col-6 container-pdb-parte-izquierda-parte-arriba--section8">
                            <p>
                                Perfil del<br>Bachiller
                            </p>
                            <div class="container-pdb-imagen-mas">
                                <div class="imagen-mas">
                                    <img src="../../public/Figuras/+.svg" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="parte-derecha-parte-arriba--section8">
                    <div class="setentaporciento">
                        <div class="container-titulo-parte-derecha-parte-arriba--section8">
                            <p class="titulo-parte-derecha-parte-arriba--section8">
                                College<br>Admissions<br>Profile
                            </p>
                        </div>
                        <div class="row container-contenido-parte-derecha-parte-arriba--section8">
                            <div class="col-3">
                                <div class="container-cap-imagen-mas">
                                    <div class="imagen-mas">
                                        <img src="../../public/Figuras/+.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-9 container-cap-parte-derecha-parte-arriba--section8">
                                <p>
                                    C<span>AP</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parte-abajo--section8">
                <div class="setentaporciento row container-contenido-parte-abajo--section8">
                    <div class="contenido-parte-abajo--section8 col-4">
                        <div class="container-imagen-mas">
                            <div class="imagen-mas">
                                <img src="../../public/Figuras/+.svg" alt="">
                            </div>
                        </div>
                        <p>Código de<br>convivencia</p>
                    </div>
                    <div class="col-4 contenido-parte-abajo-parte-derecha--section8">
                        <p>C<span>C</span></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 8 -->
        <section class="window-height section9">
            <div class="q-pt-lg container">
                <p class="titulo--section9">
                    <span>Aprobación</span><br>
                    ministerial de costo<br>de pensiones
                </p>
                <div class="resolucion-de-costos">
                    <img src="../assets/Icon/I-download-doc.svg" width="64px" height="64px" alt="">
                    <p>Resolución de<br>costos 2021</p>
                </div>
                <div class="container-texto-section9">
                    <p class="texto-section9">
                        Los padres y madres de familia de Liceo Campoverde deben cancelar los valores por concepto de
                        <span>pensiones los 5 primeros días</span> de cada mes de acuerdo al contrato firmado durante el período de
                        matriculación.
                    </p>
                </div>
                <div class="container-imagen-section9">
                    <img src="../assets/img/Figuras/F-N-6.svg" alt="">
                </div>
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
    height: 100%;
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

// < =================== Sección6 =================== >

.section6{
    background-color: $verde;
    display: flex;
}

.parte-izquierda--section6{
    width: 70%;
    padding: 2% 0% 0% 10%;
}

.parte-derecha--section6{
    width: 30%;
    display: flex;
    justify-content: flex-end;
}

.parte-derecha--section6 > img{
    height:100%
}

.titulo-parte-izquierda--section6{
    font-size: 40px;
    line-height: 54px;
    color: white;
    font-weight: 900;
}

.titulo-parte-izquierda--section6 > span{
    height: fit-content;
    padding: 0px 22px;
    border-radius: 33px;
    background: transparent;
    border: 7px solid $amarillo;
    width: fit-content;
}

.container-texto-izquierda-parte-izquierda--section6 > p:first-child{
    font-size: 26px;
    line-height: 28px;
    padding-right: 13%;
}

.container-texto-derecha-parte-izquierda--section6{
    padding-left: 8%;
}

.container-texto-derecha-parte-izquierda--section6 > p:first-child{
    font-size: 26px;
    line-height: 28px;
}

.sabermas-texto-izquierda-parte-izquierda--section6{
    font-size: 28px;
    font-weight: 900;
}

.texto-interno-sabermas-texto-izquierda-parte-izquierda--section6{
    background-color: $verde;
    font-size: 15px;
    font-weight: normal;
}

.q-expansion-item--expanded {
    border:1px solid $verde;
    border-color: $verde;
    background-color: $verde;
}

.sabermas-texto-derecha-parte-izquierda--section6{
    font-size: 28px;
    font-weight: 900;
}

.texto-interno-sabermas-texto-derecha-parte-izquierda--section6{
    background-color: $verde;
    font-size: 15px;
    font-weight: normal;
}

// < =================== Sección7 =================== >
.section7{
    display: flex;
    align-items: center
}

.titulos--section7{
    font-size: 30px;
    line-height: 30px;
    font-weight: 900;
}

.textos--section7 > li{
    font-size: 18px
}

.container-parte-derecha--section7{
    width: 80%;
}

.columna-container-parte-derecha--section7{
    display: flex;
    justify-content: flex-end;
}

.container-imagen--section7{
    display: flex;
    align-items: center;
}

// < =================== Sección8 =================== >
.section8{

}

.setentaporciento{
    width: 70%;
    // border: 1px solid $morado;
}

.parte-arriba--section8{
    height: 50%;
    display: flex;
}

.parte-izquierda-parte-arriba--section8{
    width: 50%;
    background-color: $celeste;
    height: 100%;
    display: flex;
    justify-content: center;
    padding-top: 3%;
}
.parte-derecha-parte-arriba--section8{
    width: 50%;
    background-color: $azul-oscuro;
    height: 100%;
    display: flex;
    justify-content: center;
    padding-top: 3%;
}

.parte-abajo--section8{
    background-color: $verde;
    height: 50%;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.parte-abajo--section8 .row{
    display: flex;
    justify-content:center;
}

.container-pb-parte-izquierda-parte-arriba--section8{
    display: flex;
    align-items: flex-end;
    justify-content: center;
    height: 100%;
}

.container-pb-parte-izquierda-parte-arriba--section8 > p{
    font-size: 240px;
    height: fit-content;
    margin-bottom: 0px;
    color: $gris;
    height: 92%;
    width: fit-content;
    font-weight: 900;
}

.container-pb-parte-izquierda-parte-arriba--section8 > p > span{
    font-size: 120px;
    margin-bottom: 0px;
    padding-bottom: 0px;
}

.container-pdb-parte-izquierda-parte-arriba--section8 > p{
    font-size: 30px;
    line-height: 32px;
    font-weight: 900;
    color: white;
    height: 35%;
}

.container-pdb-parte-izquierda-parte-arriba--section8 > div{
    height: 65%;
    padding-top: 10px;
}

.container-pdb-imagen-mas{
    display: flex;
    align-items: flex-start;
}

.container-titulo-parte-derecha-parte-arriba--section8{
    height: 35%;
}

.titulo-parte-derecha-parte-arriba--section8{
    font-size: 30px;
    line-height: 32px;
    font-weight: 900;
    color: white;
}

.container-cap-parte-derecha-parte-arriba--section8{
    display: flex;
    align-items: flex-end;
    justify-content: flex-start;
    height: 100%;
}

.container-cap-imagen-mas{
    display: flex;
    justify-content: flex-start;
    padding-top: 25px;
}

.container-cap-parte-derecha-parte-arriba--section8 > p{
    font-size: 240px;
    margin-bottom: 0px;
    color: $gris;
    font-weight: 900;
    height: 143%;
}

.container-cap-parte-derecha-parte-arriba--section8 > p > span{
    font-size: 120px;
    margin-bottom: 0px;
}

.container-contenido-parte-derecha-parte-arriba--section8{
    height: 65%
}

.container-contenido-parte-abajo--section8{
    height: 70%;
}

.contenido-parte-abajo--section8{
    display: flex;
    flex-direction: column;
}
.container-imagen-mas{
    height: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.imagen-mas{
    background-color: $amarillo;
    border-radius: 50%;
    border: 0.125rem solid white;
    background-color: $gris-oscuro;
    vertical-align: top;
    width: 4.5em;
    height: 4.5em;
    display: flex;
    align-items:center;
    justify-content: center;
}

.imagen-mas:hover{
    background-color: $negro;
}

.imagen-mas > img{
    height: 50%;
    width: auto;
}

.contenido-parte-abajo--section8 > p{
    height:50%;
    margin: 0px;
    font-size: 30px;
    line-height: 32px;
    font-weight: 900;
    color: white;
    display: flex;
    justify-content: center;
}

.contenido-parte-abajo-parte-derecha--section8{
    height: 100%;
    display: flex;
    align-items: flex-end;
}

.contenido-parte-abajo-parte-derecha--section8 > p{
    font-size: 240px;
    margin-bottom: 0px;
    color: #E5E1D3;
    font-weight: 900;
    height: 117%;
}

.contenido-parte-abajo-parte-derecha--section8 > p > span{
    font-size: 120px;
}

// < =================== Sección9 =================== >

.section9{
    background-color: $gris;
}

.titulo--section9{
    font-size: 40px;
    line-height: 40px;
    font-weight: 900;
    padding-left: 270px;
    padding-top: 100px;
}

.titulo--section9 > span{
    height: fit-content;
    padding: 0px 22px;
    border-radius: 33px;
    background: transparent;
    border: 7px solid $celeste;
    width: fit-content;
    line-height: 65px;
}

.container-imagen-section9{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container-imagen-section9 > img{
    width: 80%;
    height: auto;
}

.section9 > .container > p{
    position: absolute;
}

.resolucion-de-costos{
    position: absolute;
    padding-left: 55em;
    padding-top: 7em;
}
.resolucion-de-costos > img{
    width: 100%;
}

.resolucion-de-costos > p  {
    color: white;
    font-size: 28px;
    line-height: 32px;
    text-align: center;
    margin-top: 15px;
    font-weight: 900;
}

.container-texto-section9{
    position: absolute;
    padding-left: 30em;
    padding-top: 27em;
    width: 45em;
}

.texto-section9{
    font-size: 15px;
}

</style>

<script>
import { ref } from 'vue'

export default {
  setup () {
    return {
      expanded: ref(false),
      expandeddos: ref(false),
      navPos: ref('bottom'),
      slide: ref('style'),
      lorem: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo.'
    }
  }
}
</script>
