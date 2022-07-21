<template>
    <section>
        <div class="container">
            <div class="parte-arriba">
                <div class="container-titulo-parte-arriba">
                    <p class="titulo-parte-arriba my-font-black" data-aos="fade-right" data-aos-duration="1500">
                        Completa en<br>línea nuestro<br>
                        <span>formulario</span> de<br>inscripción:
                    </p>
                </div>
                <div class="container-texto-parte-arriba">
                    <p class="texto-parte-arriba my-font" data-aos="fade-left" data-aos-duration="1750">
                        Para tu comodidad puedes aplicar al formulario de inscripción en línea, solo necesitas una
                        conexión
                        a internet y un smartphone o un computador.
                    </p>
                </div>
            </div>
            <div class="parte-abajo">
                <q-form action="inscripcion.php" method="post">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="titulo1 my-font-medium">Datos del alumno</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-12 col-md-4 col-sm-4">
                            <q-input dense borderless v-model="form.nombrea" name="nombre-alumno" required label="Apellidos y nombres"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="iconInfo/I-user.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.nacimientoa" name="fechanacimiento-alumno" required label="Fecha de nacimiento"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-fecha-nacimiento.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.lugara" name="lugarnacimiento-alumno" required label="Lugar de Nacimiento"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-lugar-nacimiento.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.domicilioa" name="domicilio-alumno" required data-aos="fade-right" data-aos-duration="1500" label="Domicilio" label-color="indigo-8"
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
                            <q-input dense borderless v-model="form.gradoa" name="grado-alumno" required label="Grado o curso al que postula"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-grado.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.generoa" name="identificacion-alumno" label="Cédula" label-color="indigo-8"
                                class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-pasaporte.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.edada" name="edad-alumno" required label="Edad" label-color="indigo-8"
                                class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-edad.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.paisa" name="pais-alumno" required label="País" label-color="indigo-8"
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
                            <div class="titulo1 my-font-medium">Datos del Padre</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-12 col-md-4 col-sm-4">
                            <q-input dense borderless v-model="form.nombrep" name="nombre-padre" required label="Apellidos y nombres"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="iconInfo/I-user.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.nacimientop" name="fechanacimiento-padre" required label="Fecha de nacimiento"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-fecha-nacimiento.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.profesionp" name="profesion-padre" required label="Profesión" label-color="indigo-8"
                                class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-profesion.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.direcciontrabajop" name="direcciontrabajo-padre" required label="Dirección de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-lugar-trabajo.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonocasap" name="telefonocasa-padre" required label="Teléfono de casa"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-telephone.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonocelularp" name="telefonocelular-padre" required label="Teléfono de celular"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-telephone.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                        </div>
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-12 col-md-4 col-sm-4 columnas-formulario">
                            <q-input dense borderless v-model="form.pasaportep" name="pasaporte-padre" required label="C.I Pasaporte"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-pasaporte.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.direcciondomiciliop" name="direcciondomicilio-padre" required label="Dirección de domicilio"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-domicilio.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.lugartrabajop" name="lugartrabajo-padre" required label="Lugar de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-lugar-trabajo.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.emailp" name="email-padre" required label="Correo electrónico"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-correo-morado.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonotrabajop" name="telefonotrabajo-padre" required label="Teléfono de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
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
                            <div class="titulo1 my-font-medium">Datos de la Madre</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-12 col-md-4 col-sm-4">
                            <q-input dense borderless v-model="form.nombrem" name="nombre-madre" required label="Apellidos y nombres"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="iconInfo/I-user.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.nacimientom" name="fechanacimiento-madre" required label="Fecha de nacimiento"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-fecha-nacimiento.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.profesionm" name="profesion-madre" required label="Profesión" label-color="indigo-8"
                                class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-profesion.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.direcciontrabajom" name="direcciontrabajo-madre" required label="Dirección de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-lugar-trabajo.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonocasam" name="telefonocasa-madre" required label="Teléfono de casa"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-telephone.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonocelularm" name="telefonocelular-madre" required label="Teléfono de celular"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-telephone.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                        </div>
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-12 col-md-4 col-sm-4 columnas-formulario">
                            <q-input dense borderless v-model="form.pasaportem" name="pasaporte-madre" required label="C.I Pasaporte"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-pasaporte.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.direcciondomiciliom" required name="direcciondomicilio-madre" label="Dirección de domicilio"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-domicilio.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.lugartrabajom" name="lugartrabajo-madre" required label="Lugar de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-lugar-trabajo.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.emailm" name="email-madre" required label="Correo electrónico"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-correo-morado.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonotrabajom" name="telefonotrabajo-madre" required label="Teléfono de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-telephone.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                        </div>
                    </div>
                    <div class="row justify-center q-pt-md">
                        <q-btn rounded dense no-caps label="Enviar Formulario" type="submit" color="accent"
                            class="q-px-md boton-formulario my-font-medium" @click="form = {}" />
                    </div>
                </q-form>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@import 'src/css/colores.scss';

.parte-arriba {
    display: flex;
    flex-direction: row;
    margin: 7% 0 7% 0;
}

.container-titulo-parte-arriba {
    font-size: 50px;
    font-weight: 900;
    line-height: 55px;
    width: 40%;
}

.container-texto-parte-arriba {
    width: 60%;
    display: flex;
    align-items: flex-end;
}

.texto-parte-arriba {
    font-size: 21px;
    padding-right: 36%;
    line-height: 26px;
}

.titulo-parte-arriba>span {
    background-color: $amarillo;
    padding: 0 10px;
}

.parte-abajo {
    padding-bottom: 10%;
}

.colores-inscripcion {
    background-color: white;
    border: 1px double $celeste;
}

.campos-formulario {
    border-radius: 10px;
    margin: 15px 0;
    width: 100%;
}

.titulo1 {
    font-size: 16px;
    font-weight: 500;
}

.boton-formulario {
    margin-top: 10px;
    padding: 5px 21px;
}

@media (max-width:576px) {
    .parte-arriba {
        display: flex;
        flex-direction: column;
    }

    .container-titulo-parte-arriba {
        width: 100%;
        font-size: 36px;
        line-height: 38px;
        margin-bottom: 10px;
    }

    .container-texto-parte-arriba {
        width: 100%;
    }

    .texto-parte-arriba {
        padding-right: 0px;
    }

    .columnas-formulario {
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
