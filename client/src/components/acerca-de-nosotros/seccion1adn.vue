**<template>
    <section class="section10">
        <div class="container">
            <p class="titulo--section10 my-font-black" data-aos="fade-right" data-aos-duration="1500">
                Herramientas<br>
                <span>tecnológicas</span>
            </p>
            <div class="row fila-texto--section10">
                <div class="col-12col-md-10 container-texto--section10">
                    <p class="texto--section10 my-font" data-aos="fade-right" data-aos-duration="1750">
                        Nuestras herramientas tecnológicas para estudiantes desde segundo de básica en adelante incluyen
                        el
                        uso de software (App) efectivo y entretenido en las áreas de matemáticas, lenguaje, literatura e
                        inglés entre ellos contamos con:
                    </p>
                </div>
            </div>
            <div class="row fila-marcas--section10">
                <div class="col-0 col-md-1"></div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-RazK.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-Aleks.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-matif.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-Cambridge.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-Zoom.jpg" alt="">
                </div>
                <div class="col-0 col-md-1"></div>
                <div class="col-0 col-md-1"></div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-myon.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-nearpod.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-classkick.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-deltamath.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-googl-class.jpg" alt="">
                </div>
                <div class="col-0 col-md-1"></div>
            </div>
            <!-- Movil -->
            <div class="row mv-fila-marcas--section10">
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-RazK.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-Aleks.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-matif.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-Cambridge.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-Zoom.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-myon.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-nearpod.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-classkick.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-deltamath.jpg" alt="">
                </div>
                <div class="col-6 col-md-2">
                    <img src="../../assets/img/Logo/Logo-googl-class.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@import 'src/css/colores.scss';

.section10{
    height: 95vh;
}

.section10 > .container{
    padding-top: 5em;
}

.titulo--section10{
    font-size:40px;
    line-height: 45px;
    font-weight: 900;
}

.titulo--section10 > span{
    background-color: $verde-limon;
    padding: 0 10px;
}

.texto--section10{
    font-size: 22px;
    line-height: 28px;
    margin: 20px 0px;
}

.fila-texto--section10{
    display: flex;
    justify-content: center;
}
.container-texto--section10{
    padding-right: 27%;
}

.fila-marcas--section10{
    display: flex;
    justify-content: center;
    align-items: center;
}

.fila-marcas--section10 > div{
    height: fit-content;
    width: fit-content;
    padding: 0px 10px;
}

.fila-marcas--section10 > div > img{
    width: 170px;
    padding: 0 10px;
    height: auto;
}

@media (max-width:768px) {
    .container-texto--section10{
        padding-right: 14%;
    }

    .section10{
        height: 100%;
    }

    .fila-marcas--section10{
        display: none;
    }

    .mv-fila-marcas--section10{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }
    .mv-fila-marcas--section10 > div{
        height: fit-content;
        width: fit-content;
        padding: 0px 10px;
    }

    .mv-fila-marcas--section10 > div > img{
        width: 170px;
        padding: 0 10px;
        height: auto;
    }

    .section10 > .container{
        margin-bottom: 50px;
    }
}

@media (min-width: 768px) {
    .mv-fila-marcas--section10{
        display: none;
    }
}
</style>

<script>
export default {
  name: 'sec10adn'
}
</script>
