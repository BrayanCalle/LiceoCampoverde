<template>
    <section class="window-height section6">
        <div class="parte-izquierda--section6">
            <div class="row">
                <p class="col-9 col-md-12 titulo-parte-izquierda--section6 my-font-black">Modelo <br> <span>pedagógico</span></p>
                <div class="col-3 col-md-12 mv-img">
                    <img src="../../assets/img/Figuras/F-N-4.svg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-7 container-texto-izquierda-parte-izquierda--section6">
                    <p class="my-font-medium">
                        Partimos de la individualidad y el respeto a la diversidad, en consecuencia el Sistema
                        Campoverde se basa en un modelo centrado en el estudiante y grupos colaborativos que
                        recoge diferentes metodologías.
                    </p>
                    <q-expansion-item class="sabermas-texto-izquierda-parte-izquierda--section6 my-font-black" dense dense-toggle
                        expand-separator expand-icon-class="text-dark" v-model="expanded" label="Saber más">
                        <q-card>
                            <q-card-section class="texto-interno-sabermas-texto-izquierda-parte-izquierda--section6 my-font">
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
                <div class="col-12 col-md-5 container-texto-derecha-parte-izquierda--section6">
                    <p class="my-font-medium">
                        El aprendizaje constructivo implica que todas las actividades del estudiante
                        involucran procesos cognitivos activos.
                    </p>
                    <q-expansion-item class="sabermas-texto-derecha-parte-izquierda--section6 my-font-black" dense dense-toggle
                        expand-separator expand-icon-class="text-dark" v-model="expandeddos" label="Saber más">
                        <q-card>
                            <q-card-section class="texto-interno-sabermas-texto-derecha-parte-izquierda--section6 my-font">
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
            <img src="../../assets/img/Figuras/F-N-4.svg" alt="">
        </div>
    </section>
</template>

<style lang="scss" scoped>
@import 'src/css/colores.scss';
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
    z-index: 3;
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

@media (max-width: 1025px) {
    .parte-derecha--section6 > img{
        width: 100%;
    }
}

@media (max-width:768px) {

    .section6{
        height: 100% !important;
    }

    .parte-izquierda--section6{
        width: 100%;
    }

    .parte-derecha--section6{
        display: none;
    }
    .parte-derecha--section6 > img{
        height: 23%;
    }

    .mv-img > img{
        height: 187px;
        position: absolute;
    }

    .container-texto-izquierda-parte-izquierda--section6{
        z-index: 2;
    }

    .container-texto-derecha-parte-izquierda--section6{
        padding-left: 0px;
        margin: 30px 0;
    }

    .parte-izquierda--section6{
        padding-top: 50px;
    }

    .titulo-parte-izquierda--section6{
        font-size: 32px;
        line-height: 46px;
    }

    .titulo-parte-izquierda--section6{
        margin-bottom: 31px;
    }

    .container-texto-izquierda-parte-izquierda--section6 > p{
        font-size: 22px;
        font-weight: 500;
        line-height: 27px;
    }

    .container-texto-derecha-parte-izquierda--section6 > p{
        font-size: 24px;
        line-height: 28px;
        padding-right: 8px;
        font-weight: 500;
    }

}

@media (min-width: 768px) {
    .mv-img{
        display: none;
    }
}
</style>

<script>
import { ref } from 'vue'
export default {
  name: 'sec6adn',
  setup () {
    return {
      expanded: ref(false),
      expandeddos: ref(false)
    }
  }
}
</script>
