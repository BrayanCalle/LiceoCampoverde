<template>
    <section class="window-height section8">
        <div class="parte-arriba--section8">
            <div class="parte-izquierda-parte-arriba--section8">
                <div class="setentaporciento row">
                    <div class="col-6 container-pb-parte-izquierda-parte-arriba--section8">
                        <p class="my-font-black">P<span>B</span></p>
                    </div>
                    <div class="col-6 container-pdb-parte-izquierda-parte-arriba--section8">
                        <p class="my-font-bold">
                            Perfil del<br>Bachiller
                        </p>
                        <div class="container-pdb-imagen-mas">
                            <a href="https://www.liceocampoverde.edu.ec/recursos-liceo/PERFIL-DE-SALIDA-B.jpg" target="_blank">
                                <div class="imagen-mas">
                                    <img src="figuras/+.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="parte-derecha-parte-arriba--section8">
                <div class="setentaporciento">
                    <div class="container-titulo-parte-derecha-parte-arriba--section8">
                        <p class="titulo-parte-derecha-parte-arriba--section8 my-font-bold">
                            College<br>Admissions<br>Profile
                        </p>
                    </div>
                    <div class="row container-contenido-parte-derecha-parte-arriba--section8">
                        <div class="col-3">
                            <div class="container-cap-imagen-mas">
                                <a href="https://www.liceocampoverde.edu.ec/recursos-liceo/college-admissions-profile-2020-3.pdf" target="_blank">
                                    <div class="imagen-mas">
                                        <img src="figuras/+.svg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-9 container-cap-parte-derecha-parte-arriba--section8">
                            <p class="my-font-black">
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
                        <a href="https://www.liceocampoverde.edu.ec/recursos-liceo/CÓDIGO-DE-CONVIVENCIA_-JUNTOS-APRENDEMOS-Y-NOS-CUIDAMOS-_-2021-2022_SEMIPRESENCIAL-_-FINAL-comprimido.pdf" target="_blank">
                            <div class="imagen-mas">
                                <img src="figuras/+.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <p class="my-font-bold">Código de<br>convivencia</p>
                </div>
                <div class="col-4 contenido-parte-abajo-parte-derecha--section8">
                    <p class="my-font-black">C<span>C</span></p>
                </div>
            </div>
        </div>
        <!-- Dispositivo móvil -->
        <div class="mv-pdb">
            <div class="row">
                <div class="col-6 mv-letrap">
                    <p class="my-font-black">P</p>
                </div>
                <div class="col-6 mv-texto-pdb">
                    <p class="my-font-bold">Perfil del Bachiller</p>
                    <a href="https://www.liceocampoverde.edu.ec/recursos-liceo/PERFIL-DE-SALIDA-B.jpg" target="_blank">
                        <div class="imagen-mas">
                            <img src="figuras/+.svg" alt="">
                        </div>
                    </a>
                    <p class="mv-letrab my-font-black">B</p>
                </div>
            </div>
        </div>
        <!-- Seccion College Admissions Profile  -->
        <div class="mv-cap">
            <div class="row">
                <div class="col-6 mv-letrac-cap">
                    <p class="my-font-black">C</p>
                </div>
                <div class="col-6 mv-texto-pdb">
                    <p class="my-font-bold">
                        College Admissions Profile
                    </p>
                    <a href="https://www.liceocampoverde.edu.ec/recursos-liceo/college-admissions-profile-2020-3.pdf" target="_blank">
                        <div class="imagen-mas">
                            <img src="figuras/+.svg" alt="">
                        </div>
                    </a>
                    <p class="mv-letraa-cap my-font-black">A</p>
                </div>
            </div>
        </div>
        <!-- Código de Convivencia -->
        <div class="mv-cdc">
            <div class="row">
                <div class="col-6 mv-letrac-cap">
                    <p class="my-font-black">C</p>
                </div>
                <div class="col-6 mv-texto-pdb">
                    <p class="my-font-bold">
                        Código de Convivencia
                    </p>
                    <a href="https://www.liceocampoverde.edu.ec/recursos-liceo/CÓDIGO-DE-CONVIVENCIA_-JUNTOS-APRENDEMOS-Y-NOS-CUIDAMOS-_-2021-2022_SEMIPRESENCIAL-_-FINAL-comprimido.pdf" target="_blank">
                        <div class="imagen-mas">
                            <img src="figuras/+.svg" alt="">
                        </div>
                    </a>
                    <p class="mv-letrac-cdc my-font-black">C</p>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@import 'src/css/colores.scss';

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

@media (max-width: 380px) {
    .mv-letrap > p{
        font-size: 369px !important;
    }

    .mv-letrab{
        font-size: 190px !important;
    }

    .mv-letrac-cap > p{
        font-size: 369px !important;
    }

    .mv-letraa-cap{
        font-size: 190px !important;
    }
}

@media (max-width:768px) {

    .section8{
        height: 100% !important;
    }

    .parte-arriba--section8{
        display: none;
    }

    .parte-abajo--section8{
        display: none;
    }

    .mv-pdb{
        background-color: $celeste;
        height: 50vh;
    }

    .mv-letrap{
        display: flex;
        align-items: flex-end;
    }

    .mv-letrap > p{
        font-size: 409px;
        margin: 0px;
        padding: 0px;
        margin-left: -33px;
        font-weight: 900;
        color: $gris;
    }

    .mv-texto-pdb{
        padding-top: 68px;
    }

    .mv-texto-pdb > p:first-child{
        font-size: 27px;
        color: white;
        line-height: 30px;
        font-weight: 900;
        margin-left: 45px;
    }

    .imagen-mas{
        width: 6.5em;
        height: 6.5em;
        margin-left: auto;
        margin-right: auto;
    }

    .mv-letrab{
        font-size: 228px;
        font-weight: 900;
        color: #e5e1d3;
        margin-top: -38px;
        margin-left: 18px;
    }
    // CAP

    .mv-cap{
        background-color: $azul-oscuro;
        height: 50vh;
    }

    .mv-letrac-cap{
        display: flex;
        align-items: flex-end;
    }

    .mv-letrac-cap > p{
        font-size: 409px;
        margin: 0px;
        margin-top: -10px;
        padding: 0px;
        margin-left: -33px;
        font-weight: 900;
        color: $gris;
    }

    .mv-letraa-cap{
        font-size: 228px;
        font-weight: 900;
        color: #e5e1d3;
        margin-top: -69px;
        margin-left: 18px;
    }
    // CDC
    .mv-cdc{
        background-color: $verde;
        height: 50vh;
    }

    .mv-letrac-cdc{
        font-size: 228px;
        font-weight: 900;
        color: #e5e1d3;
        margin-top: -42px;
        margin-left: 18px;
    }

}

@media (min-width: 768px) {
    .mv-pdb,
    .mv-cap,
    .mv-cdc{
        display: none;
    }
}

</style>

<script>
export default {
  name: 'sec8adn'
}
</script>
