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
                            <q-input dense borderless v-model="form.nombrea" ref="nombrealumno" name="nombrealumno" lazy-rules :rules="[rules.required]" label="Apellidos y nombres"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="iconInfo/I-user.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.nacimientoa" ref="fechanacimientoalumno" name="fechanacimientoalumno" lazy-rules :rules="[rules.required]" label="Fecha de nacimiento"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-fecha-nacimiento.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.lugara" ref="lugarnacimientoalumno" name="lugarnacimientoalumno" lazy-rules :rules="[rules.required]" label="Lugar de Nacimiento"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-lugar-nacimiento.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.domicilioa" ref="domicilioalumno" name="domicilioalumno" lazy-rules :rules="[rules.required]" data-aos="fade-right" data-aos-duration="1500" label="Domicilio" label-color="indigo-8"
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
                            <q-input dense borderless v-model="form.gradoa" ref="gradoalumno" name="gradoalumno" lazy-rules :rules="[rules.required]" label="Grado o curso al que postula"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-grado.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.generoa" ref="identificacionalumno" name="identificacionalumno" label="Cédula" label-color="indigo-8"
                                class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-pasaporte.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.edada" ref="edadalumno" name="edadalumno" lazy-rules :rules="[rules.required]" label="Edad" label-color="indigo-8"
                                class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-edad.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.paisa" ref="paisalumno" name="paisalumno" lazy-rules :rules="[rules.required]" label="País" label-color="indigo-8"
                                class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-pais.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                        </div>
                    </div>
                    <!-- Inicio Datos del Padre  -->
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="titulo1 my-font-medium">Datos del Padre</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-12 col-md-4 col-sm-4">
                            <q-input dense borderless v-model="form.nombrep" ref="nombrepadre" name="nombrepadre" lazy-rules :rules="[rules.required]" label="Apellidos y nombres"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="iconInfo/I-user.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.nacimientop" ref="fechanacimientopadre" name="fechanacimientopadre" lazy-rules :rules="[rules.required]" label="Fecha de nacimiento"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-fecha-nacimiento.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.profesionp" ref="profesionpadre" name="profesionpadre" lazy-rules :rules="[rules.required]" label="Profesión" label-color="indigo-8"
                                class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-profesion.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.direcciontrabajop" ref="direcciontrabajopadre" name="direcciontrabajopadre" lazy-rules :rules="[rules.required]" label="Dirección de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-lugar-trabajo.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonocasap" ref="telefonocasapadre" name="telefonocasapadre" lazy-rules :rules="[rules.required]" label="Teléfono de casa"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-telephone.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonocelularp" ref="telefonocelularpadre" name="telefonocelularpadre" lazy-rules :rules="[rules.required]" label="Teléfono de celular"
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
                            <q-input dense borderless v-model="form.pasaportep" ref="pasaportepadre" name="pasaportepadre" lazy-rules :rules="[rules.required]" label="C.I Pasaporte"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-pasaporte.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.direcciondomiciliop" ref="direcciondomiciliopadre" name="direcciondomiciliopadre" lazy-rules :rules="[rules.required]" label="Dirección de domicilio"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-domicilio.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.lugartrabajop" ref="lugartrabajopadre" name="lugartrabajopadre" lazy-rules :rules="[rules.required]" label="Lugar de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-lugar-trabajo.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.emailp" ref="emailpadre" name="emailpadre" lazy-rules :rules="[rules.required]" label="Correo electrónico"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-correo-morado.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonotrabajop" ref="telefonotrabajopadre" name="telefonotrabajopadre" lazy-rules :rules="[rules.required]" label="Teléfono de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-telephone.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                        </div>
                    </div>
                    <!-- Fin datos del Padre -->
                    <!-- Datos de la Madre  -->
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="titulo1 my-font-medium">Datos de la Madre</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-1"></div>
                        <div class="col-12 col-md-4 col-sm-4">
                            <q-input dense borderless v-model="form.nombrem" ref="nombremadre" name="nombremadre" lazy-rules :rules="[rules.required]" label="Apellidos y nombres"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="iconInfo/I-user.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.nacimientom" ref="fechanacimientomadre" name="fechanacimientomadre" lazy-rules :rules="[rules.required]" label="Fecha de nacimiento"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-fecha-nacimiento.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.profesionm" ref="profesionmadre" name="profesionmadre" lazy-rules :rules="[rules.required]" label="Profesión" label-color="indigo-8"
                                class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-profesion.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.direcciontrabajom" ref="direcciontrabajomadre" name="direcciontrabajomadre" lazy-rules :rules="[rules.required]" label="Dirección de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-lugar-trabajo.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonocasam" ref="telefonocasamadre" name="telefonocasamadre" lazy-rules :rules="[rules.required]" label="Teléfono de casa"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-telephone.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonocelularm" ref="telefonocelularmadre" name="telefonocelularmadre" lazy-rules :rules="[rules.required]" label="Teléfono de celular"
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
                            <q-input dense borderless v-model="form.pasaportem" ref="pasaportemadre" name="pasaportemadre" lazy-rules :rules="[rules.required]" label="C.I Pasaporte"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-pasaporte.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.direcciondomiciliom" ref="direcciondomiciliomadre" name="direcciondomiciliomadre" lazy-rules :rules="[rules.required]" label="Dirección de domicilio"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-domicilio.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.lugartrabajom" ref="lugartrabajomadre" name="lugartrabajomadre" lazy-rules :rules="[rules.required]" label="Lugar de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-lugar-trabajo.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.emailm" ref="emailmadre" name="emailmadre" lazy-rules :rules="[rules.required]" label="Correo electrónico"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-correo-morado.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                            <q-input dense borderless v-model="form.telefonotrabajom" ref="telefonotrabajomadre" name="telefonotrabajomadre" lazy-rules :rules="[rules.required]" label="Teléfono de Trabajo"
                                label-color="indigo-8" class="q-px-sm campos-formulario colores-inscripcion">
                                <template v-slot:prepend>
                                    <q-avatar square>
                                        <img src="../assets/Icon/I-telephone.svg">
                                    </q-avatar>
                                </template>
                            </q-input>
                        </div>
                    </div>
                    <!-- Fin datos de la madre -->
                    <div class="row justify-center q-pt-md">
                        <q-btn rounded dense no-caps label="Enviar Formulario" type="submit" color="accent"
                            class="q-px-md boton-formulario my-font-medium" />
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
      form: {},
      rules: {
        required: (value) => !!value || 'Este campo es obligatorio'
      }
    }
  },
  methods: {
  }
}
</script>
