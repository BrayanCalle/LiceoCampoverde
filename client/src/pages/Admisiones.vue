<template>
  <q-page>
    <section class="section1">
      <div class="container">
        <div class="parte-izquierda--section1">
          <p class="titulo-parte-izquierda--section1">Admisiones</p>
          <p class="texto-parte-izquierda--section1">
            Según el nivel al que aplica el aspirante, hasta el 01 de septiembre del año de admisión, los postulantes
            deben haber cumplido con estos requisitos de edad para el ingreso:
          </p>
        </div>
        <div class="parte-derecha--section1">
          <div class="row">
            <div class="col-12 col-md-4 columnas-derecha">
              <p class="titulo-parte-derecha--section1 titulo-campito-parte-derecha--section1">Campito</p>
              <p class="subtitulo-parte-derecha--section1">2-4 años</p>
              <q-expansion-item class="bg-secondary text-white cuadro-expansion" dense dense-toggle
                expand-separator expand-icon-class="text-white" v-model="expanded" label="Ver todos los años">
                <q-card>
                  <q-card-section class="text-dark">
                    <ul class="texto-interno-desplegable">
                      <li><b>2 años,</b> para Inicial I</li>
                      <li><b>3 años,</b> para Inicial II</li>
                      <li><b>4 años,</b> para Inicial II (Pre Kinder)</li>
                    </ul>
                  </q-card-section>
                </q-card>
              </q-expansion-item>
            </div>
            <div class="col-12 col-md-4 columnas-derecha">
              <p class="titulo-parte-derecha--section1 titulo-basica-parte-derecha--section1">E.G. Básica</p>
              <p class="subtitulo-parte-derecha--section1">5-14 años</p>
              <q-expansion-item class="bg-primary text-white cuadro-expansion" dense dense-toggle
                expand-separator expand-icon-class="text-white" v-model="expandedbasica" label="Ver todos los años">
                <q-card>
                  <q-card-section class="text-dark">
                    <ul class="texto-interno-desplegable">
                      <li><b>5 años,</b> para Primer Año de Educación Básica (Kinder)</li>
                      <li><b>6 años,</b> para Segundo Año de Educación Básica</li>
                      <li><b>7 años,</b> para Tercer Año de Educación Básica</li>
                      <li><b>8 años,</b> para Cuarto Año de Educación Básica</li>
                      <li><b>9 años,</b> para Quinto Año de Educación Básica</li>
                      <li><b>10 años,</b> para Sexto Año de Educación Básica</li>
                      <li><b>11 años,</b> para Séptimo Año de Educación Básica</li>
                      <li><b>12 años,</b> para Octavo Año de Educación Básica</li>
                      <li><b>13 años,</b> para Noveno Año de Educación Básica</li>
                      <li><b>14 años,</b> para Décimo Año de Educación Básica</li>
                    </ul>
                  </q-card-section>
                </q-card>
              </q-expansion-item>
            </div>
            <div class="col-12 col-md-4 columnas-derecha">
              <p class="titulo-parte-derecha--section1 titulo-bachillerato-parte-derecha--section1">Bachillerato</p>
              <p class="subtitulo-parte-derecha--section1">15-17 años</p>
              <q-expansion-item class="bg-accent text-white cuadro-expansion" dense dense-toggle
                expand-separator expand-icon-class="text-white" v-model="expandedbachillerato" label="Ver todos los años">
                <q-card>
                  <q-card-section class="text-dark">
                    <ul class="texto-interno-desplegable">
                      <li><b>15 años,</b> para Primer Año de Bachillerato</li>
                      <li><b>16 años,</b> para Segundo Año de Bachillerato</li>
                      <li><b>17 años,</b> para Tercer Año de Bachillerato</li>
                    </ul>
                  </q-card-section>
                </q-card>
              </q-expansion-item>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section-7 />
  </q-page>
</template>

<style lang="scss" scoped>
@import 'src/css/app.scss';

.section1 > .container{
  display: flex;
  padding-bottom: 10%;
}

.parte-izquierda--section1{
  width: 30%;
}

.parte-derecha--section1{
  width: 70%;
  margin-top: 20%;
}

.titulo-parte-izquierda--section1{
  font-size: 34px;
  background-color: $morado;
  padding: 0 15px;
  width: fit-content;
  color: $blanco;
  font-weight: 900;
  margin: 30% 0 15% 0px;
}

.texto-parte-izquierda--section1{
  font-size: 22px;
  line-height: 26px;
  padding-right: 50px;
}

.titulo-parte-derecha--section1{
  font-size: 30px;
  font-weight: 900;
  color: $blanco;
  padding: 0 15px;
  width: fit-content;
}

.titulo-campito-parte-derecha--section1{
  background-color: $verde;
}

.titulo-basica-parte-derecha--section1{
  background-color: $celeste;
}

.titulo-bachillerato-parte-derecha--section1{
  background-color: $morado;
}

.subtitulo-parte-derecha--section1{
  font-size: 20px;
  font-weight: 900;
}

.columnas-derecha{
  padding: 0 10px;
}

.texto-interno-desplegable{
  font-size: 16px;
  padding-left: 0px;
}

@media (max-width: 576px) {
  .titulo-parte-izquierda--section1{
    margin: 15% 0 7% 0px;
  }

  .parte-derecha--section1{
    margin-top: 5%;
  }

  .columnas-derecha{
    margin-bottom: 66px;
  }

  .titulo-parte-derecha--section1{
    font-size: 38px;
  }
  .subtitulo-parte-derecha--section1{
    font-size: 30px;
  }

  .cuadro-expansion{
    font-size: 25px;
    padding: 3px 0;
  }

}

@media (max-width: 767px) {

  .section1 > .container{
  display: flex;
  flex-direction: column;
  }
.parte-izquierda--section1{
    width: 100%;
  }

  .parte-derecha--section1{
    width: 100%;
  }
}

</style>

<script>
import { ref } from 'vue'
import Section7 from '../components/home/Section7.vue'

export default {
  name: 'home',
  components: {
    Section7
  },
  setup () {
    return {
      expanded: ref(false),
      expandedbasica: ref(false),
      expandedbachillerato: ref(false)
    }
  }
}
</script>
