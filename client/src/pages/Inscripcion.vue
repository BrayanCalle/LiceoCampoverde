<template>
    <section>
        <div class="container">
            <div class="parte-arriba">
                <div class="container-titulo-parte-arriba">
                    <p class="titulo-parte-arriba">
                        Completa en<br>línea nuestro<br>
                        <span>formulario</span> de<br>inscripción:
                    </p>
                </div>
                <div class="container-texto-parte-arriba">
                    <p class="texto-parte-arriba">
                        Para tu comodidad puedes aplicar al formulario de inscripción en línea, solo necesitas una
                        conexión
                        a internet y un smartphone o un computador.
                    </p>
                </div>
            </div>
            <div class="parte-abajo">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="titulo1">Datos del alumno</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1"></div>
                    <div class="col-12 col-md-4 col-sm-4">
                        <q-input dense borderless v-model="form.name" label="Apellidos y nombres" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="iconInfo/I-user.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Fecha de nacimiento" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-fecha-nacimiento.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Lugar de Nacimiento" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-lugar-nacimiento.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Domicilio" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-domicilio.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                    </div>
                    <div class="col-md-1 col-sm-1"></div>
                    <div class="col-12 col-md-4 col-sm-4 columnas-formulario">
                        <q-input dense borderless v-model="form.name" label="Grado o curso al que postula"
                            label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-grado.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Género" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-genero.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Edad" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-edad.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="País" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-pais.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                    </div>
                </div>
                <!--  -->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="titulo1">Datos del Padre</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1"></div>
                    <div class="col-12 col-md-4 col-sm-4">
                        <q-input dense borderless v-model="form.name" label="Apellidos y nombres" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="iconInfo/I-user.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Fecha de nacimiento" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-fecha-nacimiento.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Profesión" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-profesion.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Dirección de Trabajo"
                            label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-lugar-trabajo.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Teléfono de casa" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-telephone.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Teléfono de celular" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-telephone.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                    </div>
                    <div class="col-md-1 col-sm-1"></div>
                    <div class="col-12 col-md-4 col-sm-4 columnas-formulario">
                        <q-input dense borderless v-model="form.name" label="C.I Pasaporte" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-pasaporte.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Dirección de domicilio"
                            label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-domicilio.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Lugar de Trabajo" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-lugar-trabajo.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Correo electrónico" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-correo-morado.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Teléfono de Trabajo" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-telephone.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                    </div>
                </div>
                <!--  -->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="titulo1">Datos de la Madre</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-sm-1"></div>
                    <div class="col-12 col-md-4 col-sm-4">
                        <q-input dense borderless v-model="form.name" label="Apellidos y nombres" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="iconInfo/I-user.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Fecha de nacimiento" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-fecha-nacimiento.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Profesión" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-profesion.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Dirección de Trabajo"
                            label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-lugar-trabajo.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Teléfono de casa" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-telephone.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Teléfono de celular" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-telephone.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                    </div>
                    <div class="col-md-1 col-sm-1"></div>
                    <div class="col-12 col-md-4 col-sm-4 columnas-formulario">
                        <q-input dense borderless v-model="form.name" label="C.I Pasaporte" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-pasaporte.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Dirección de domicilio"
                            label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-domicilio.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Lugar de Trabajo" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-lugar-trabajo.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Correo electrónico" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-correo-morado.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                        <q-input dense borderless v-model="form.name" label="Teléfono de Trabajo" label-color="indigo-8"
                            class="q-px-sm campos-formulario colores-inscripcion">
                            <template v-slot:prepend>
                                <q-avatar square>
                                    <img src="../assets/Icon/I-telephone.svg">
                                </q-avatar>
                            </template>
                        </q-input>
                    </div>
                </div>
                <div class="row justify-center q-pt-md">
                    <q-btn rounded dense no-caps label="Enviar Formulario" type="submit" color="accent" class="q-px-md boton-formulario"
                        @click="form = {}" />
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@import 'src/css/app.scss';

.parte-arriba{
    display: flex;
    flex-direction: row;
    margin: 7% 0 7% 0;
}

.container-titulo-parte-arriba{
    font-size: 50px;
    font-weight: 900;
    line-height: 55px;
    width: 40%;
}

.container-texto-parte-arriba{
    width: 60%;
    display: flex;
    align-items: flex-end;
}

.texto-parte-arriba{
    font-size: 21px;
    padding-right: 36%;
    line-height: 26px;
}

.titulo-parte-arriba > span{
    background-color: $amarillo;
    padding: 0 10px;
}

.parte-abajo{
    padding-bottom: 10%;
}

.colores-inscripcion{
    background-color: white;
    border: 1px double $celeste;
}

.campos-formulario{
    border-radius: 10px;
    margin: 15px 0;
    width: 100%;
}

.titulo1{
    font-size: 16px;
    font-weight: 500;
}

.boton-formulario{
    margin-top: 10px;
    padding: 5px 21px;
}

@media (max-width:576px) {
    .parte-arriba{
        display: flex;
        flex-direction: column;
    }

    .container-titulo-parte-arriba{
        width: 100%;
        font-size: 36px;
        line-height: 38px;
        margin-bottom: 10px;
    }

    .container-texto-parte-arriba{
        width: 100%;
    }

    .texto-parte-arriba{
        padding-right: 0px;
    }

    .columnas-formulario{
        margin-top: -10px;
    }

}

</style>

<script>
export default {
  name: 'inscripcion',
  components: {
  },
  data () {
    return {
      form: {}
    }
  }
}
</script>
