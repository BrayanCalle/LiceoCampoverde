<template>
    <section class="banner-acerca-de-nosotros">
        <div class="container-texto-banner--acerca-de-nosotros">
            <p class="texto-banner--acerca-de-nosotros">
                Acerca de <br> nosotros, <br>nuestra<br><span>motivación</span>
            </p>
        </div>
        <div class="container-imagen-banner--acerca-de-nosotros">
            <img src="../../assets/img/Figuras/F-N-1.svg" alt="">
        </div>
        <!-- Movil -->
        <div class="mv-container-imagen-banner--acerca-de-nosotros">
            <img src="../../assets/img/Figuras/F-N-P1.svg" alt="">
        </div>
        <div class="mv-container-texto-banner--acerca-de-nosotros">
            <p class="mv-texto-banner--acerca-de-nosotros">
                Acerca de <br> nosotros, <br>nuestra<br><span>motivación</span>
            </p>
        </div>
    </section>
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

@media (max-width:768px) {
    .banner-acerca-de-nosotros{
        font-size: 14px;
        display: block;
    }

    .container-imagen-banner--acerca-de-nosotros{
        display: none;
    }

    .container-texto-banner--acerca-de-nosotros{
        display: none;
    }

    .mv-texto-banner--acerca-de-nosotros > span{
        background-color: $amarillo;
    }

    .mv-container-texto-banner--acerca-de-nosotros{
        position: absolute;
        top: 10px;
        display: flex;
        width: 90%;
        justify-content: flex-end;
    }

    .mv-texto-banner--acerca-de-nosotros{
        font-size: 32px;
        font-weight: 900;
        line-height: 35px;
        margin-top: 30px;
    }

}

@media (min-width:768px) {
    .mv-container-imagen-banner--acerca-de-nosotros{
        display: none;
    }

    .mv-container-texto-banner--acerca-de-nosotros{
        display: none;
    }
}

</style>

<script>

export default {
  name: 'sec1adn'
}
</script>
