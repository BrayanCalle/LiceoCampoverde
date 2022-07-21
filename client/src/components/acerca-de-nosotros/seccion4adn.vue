<template>
    <section class="section-4 q-pa-xl">
        <div class="container">
            <div class="mitad-arriba--section-4">
                <p class="titulo--section-4 my-font-black" data-aos="fade-right" data-aos-duration="1500">
                    Valores <br> <span>corporativos</span>
                </p>
            </div>
            <div class="mitad-abajo--section-4 ">
                <div class="container q-pa-xl">
                    <div class="row q-pa-md">
                        <div class="col-6 col-md-4 conatainer-texto--section-4">
                            <p class="my-font">
                                Responsabilidad, <b>ética, honestidad y transparencia,</b> como
                                el nivel más alto de compromiso y de profesionalidad.
                            </p>
                        </div>
                        <div
                            class="col-6 col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-impares--section-4">
                            <div id="circulo1" class="circulo-numeros--section-4">
                                <p class="my-font-black">1.</p>
                            </div>
                        </div>
                        <div
                            class="col-6 col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-pares--section-4">
                            <div id="circulo2" class="circulo-numeros--section-4">
                                <p class="my-font-black">2.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 conatainer-texto--section-4">
                            <p class="my-font">
                                Actualización y formación continua, investigación
                                pedagógica e innovación
                            </p>
                        </div>
                    </div>
                    <!-- Fila 2 -->
                    <div class="row q-pa-md">
                        <div class="col-6 col-md-4 conatainer-texto--section-4">
                            <p class="my-font">
                                Reconocimiento y <b>respeto por la diversidad</b> para
                                garantizar las mismas oportunidades de aprendizaje.
                            </p>
                        </div>
                        <div
                            class="col-6 col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-impares--section-4">
                            <div id="circulo3" class="circulo-numeros--section-4">
                                <p class="my-font-black">3.</p>
                            </div>
                        </div>
                        <div
                            class="col-6 col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-pares--section-4">
                            <div id="circulo4" class="circulo-numeros--section-4">
                                <p class="my-font-black">4.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 conatainer-texto--section-4">
                            <p class="my-font">
                                Calidad en procesos para asegurar el cumplimiento de los objetivos de la
                                organización con <b>eficiencia, eficacia y pertinencia.</b>
                            </p>
                        </div>
                    </div>
                    <!-- Fila 3 -->
                    <div class="row q-pa-md">
                        <div class="col-6 col-md-4 conatainer-texto--section-4">
                            <p class="my-font">
                                <b>Calidez y buen trato,</b> condiciones imprescindibles
                                en toda relación humana.
                            </p>
                        </div>
                        <div
                            class="col-6 col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-impares--section-4">
                            <div id="circulo5" class="circulo-numeros--section-4">
                                <p class="my-font-black">5.</p>
                            </div>
                        </div>
                        <div
                            class="col-6 col-md-2 container-circulo-numeros--section-4 container-circulo-numeros-pares--section-4">
                            <div id="circulo6" class="circulo-numeros--section-4">
                                <p class="my-font-black">6.</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 conatainer-texto--section-4">
                            <p class="my-font">
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
@import 'src/css/colores.scss';
.section-4{
    height: 100%;
    margin-top: 4em;
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

@media (max-width: 1025px) {
    .section-4{
        margin-top: 0em;
    }
}

@media (max-width:768px) {
    .section-4{
        padding: 48px 0px;
    }

    .conatainer-texto--section-4 > p{
        padding: 0px;
    }

    .circulo-numeros--section-4{
        width: 160px;
        height: 160px;
    }

    .circulo-numeros--section-4 > p{
        font-weight: 900;
    }

}

</style>

<script>
export default {
  name: 'sec4adn'
}
</script>
