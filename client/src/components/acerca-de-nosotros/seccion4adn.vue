<template>
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
</template>

<style lang="scss" scoped>
@import 'src/css/app.scss';
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
</style>

<script>
export default {
  name: 'sec4adn'
}
</script>
