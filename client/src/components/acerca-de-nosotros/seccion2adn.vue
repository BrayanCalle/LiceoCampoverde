<template>
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
        <div class="mv-seccion2">
            <div class="mv-mision">
                <div class="container">
                    <p class="titulo-mision">Misión</p>
                    <p class="mb-cero texto-mision">Educamos<br> desde otro<br> punto de vista.</p>
                </div>
            </div>
            <div class="mv-vision">
                <div class="container">
                    <p class="titulo-vision">Visión</p>
                    <p class="texto-vision">
                        <b>Ser, para el año 2023, una institución valorada por su prestigio educativo,
                        reconocida por su constante innovación didáctica.</b>
                    </p>
                    <p class="mb-cero texto-vision">
                        El desarrollo de sus prácticas educativas bajo un marco metodológico diferenciador, unificado,
                        compartido y coordinado para la formación permanente de individuos que trascienden y transforman
                        los ámbitos personales, sociales, ambientales y culturales en los que se desenvuelvan.
                    </p>
                </div>
            </div>
            <div class="mv-principios">
                <div class="container">
                    <p class="titulo-principios">
                        Principios<br><span>educativos</span>
                    </p>
                    <ul class="mb-cero texto-principios">
                        <li>1. Partir del nivel de desarrollo del estudiante.</li>
                        <li>2. Asegurar la construcción de aprendizajes significativos.</li>
                        <li>3. Aprender a aprender.</li>
                        <li>4. Modificar los esquemas de conocimiento.</li>
                        <li>5. Realizar una intensa actividad por parte del alumno.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@import 'src/css/app.scss';

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

@media (max-width:768px) {
    // .mitad-izquierda-seccion2--acerca-de-nosotros{
    //     width: 100%;
    // }

    // .container-mision{
    //     width: 100%;
    // }

    // .mitad-arriba-mitad-izquierda-seccion2--acerca-de-nosotros{
    //     width: 100%;
    // }

    // .mitad-abajo-mitad-izquierda-seccion2--acerca-de-nosotros{
    //     width: 100%;
    // }

    // .mitad-derecha-seccion2--acerca-de-nosotros{
    //     width: 100%;
    // }

    // .seccion2--acerca-de-nosotros{
    //     display: block;
    // }

    .seccion2--acerca-de-nosotros{
        height: 100%;
    }

    .mitad-izquierda-seccion2--acerca-de-nosotros{
        display: none;
    }

    .mitad-derecha-seccion2--acerca-de-nosotros{
        display: none;
    }

    .mv-mision{
        background-color: $celeste;
        color: $blanco;
    }

    .mv-vision{
        background-color: $gris;
    }

    .mv-principios{
        background-color: $azul-oscuro;
        color: $blanco;
    }

    .mb-cero{
        margin-bottom: 0px;
    }

    .texto-mision,
    .texto-vision,
    .texto-principios{
        font-size: 20px;
        line-height: 24px;
    }

    .titulo-mision{
        font-size: 26px;
        line-height: 18px;
        height: fit-content;
        width: fit-content;
        padding: 7px 22px;
        font-weight: 900;
        border-radius: 33px;
        background: transparent;
        border: 5px solid #8255A5;
    }

    .titulo-vision{
        font-size: 26px;
        line-height: 18px;
        height: fit-content;
        width: fit-content;
        padding: 7px 22px;
        font-weight: 900;
        border-radius: 33px;
        background: transparent;
        border: 5px solid #8255A5;
    }

    .titulo-principios{
        font-size: 26px;
        line-height: 18px;
        font-weight: 900;
    }
    .titulo-principios > span{
        height: fit-content;
        width: fit-content;
        line-height: 60px;
        padding: 2px 22px;
        border-radius: 33px;
        background: transparent;
        border: 5px solid #8255A5;
    }

    .mv-mision > .container{
        padding: 70px 0px 70px 40px;
    }

    .texto-mision{
        padding-left: 15px;
    }

    .mv-vision > .container{
        padding: 70px 40px 70px 40px;
    }

    .texto-vision{
        padding-left: 15px;
    }

    .principios > .container{
        padding: 70px 40px 70px 40px;
    }

    .texto-principios{
        list-style: none;
        padding-left: 15px;
    }

    .texto-principios > li{
        line-height: 30px;
        font-size: 20px;
        margin-bottom: 5px;
    }

}

</style>

<script>

export default {
  name: 'sec2adn'
}
</script>
