<template>
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
                    <img src="../../assets/img/Figuras/F-N-7.svg" alt="">
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
</template>

<style lang="scss" scoped>
@import 'src/css/app.scss';

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

.container-imagen--section7 > img{
    width: 100%;
}
</style>

<script>
export default {
  name: 'sec7adn'
}
</script>
