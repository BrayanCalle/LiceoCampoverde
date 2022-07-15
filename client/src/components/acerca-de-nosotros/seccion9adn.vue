<template>
    <section class="window-height section9">
        <div class="q-pt-lg container">
            <p class="titulo--section9">
                <span>Aprobación</span><br>
                ministerial de costo<br>de pensiones
            </p>
            <div class="resolucion-de-costos">
                <img src="../../assets/Icon/I-download-doc.svg" width="64px" height="64px" alt="">
                <p>Resolución de<br>costos 2021</p>
            </div>
            <div class="container-texto-section9">
                <p class="texto-section9">
                    Los padres y madres de familia de Liceo Campoverde deben cancelar los valores por concepto de
                    <span>pensiones los 5 primeros días</span> de cada mes de acuerdo al contrato firmado durante el
                    período de
                    matriculación.
                </p>
            </div>
            <div class="container-imagen-section9">
                <img src="../../assets/img/Figuras/F-N-6.svg" alt="">
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@import 'src/css/app.scss';

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
export default {
  name: 'sec9adn'
}
</script>
