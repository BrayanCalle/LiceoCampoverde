<template>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-6 contenedor_section7 q-pt-xl">
      <div class="my-font-ultra title_1 padding_section7" style="height: 30vh">
        <span class="bg-secondary text-white">Educamos </span><br/>
        seres<br/>
        humanos <br>
        auténticos
      </div>

      <div class="column items-end full-width">
        <q-img src="figuras/F-6.svg" alt="imagen" class="img_responsive">
          <div class=" my-font-ultra text-white text-right absolute-full bg-transparent text_responsive">
            Permítenos <br>
            mostrarte lo <br>
            que podemos <br>
            hacer por <br>
            tu hijo
          </div>
        </q-img>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-6 fondo_gris q-pt-xl">
      <div class="row items-end">
        <img src="figuras/F-2.svg" alt="imagen" style="height:30vh"/>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 row justify-center q-mt-xl">
          <img src="iconInfo/I-rostro.gif" alt="rostro" style="height:calc(15vh + 1vw)"/>
        </div>
      </div>

      <div class="q-py-lg">
        <q-form class="column items-center q-gutter-y-xs full-width" @submit="sendForm()">
          <q-input borderless name="nombre" ref="nombre" v-model="form.nombre" placeholder="Nombre y apellido"
            class="q-px-sm campos_form" lazy-rules :rules="[rules.required]">
            <template v-slot:prepend>
              <q-avatar square>
                <img src="iconInfo/I-user.svg">
              </q-avatar>
            </template>
          </q-input>
          <q-input borderless v-model="form.email" ref="email" name="email" type="email" placeholder="mimailprincipal@mail.com"
            class="q-px-sm campos_form" lazy-rules :rules="[rules.required]">
            <template v-slot:prepend>
              <q-avatar square>
                <img src="iconInfo/I-correo-morado.svg">
              </q-avatar>
            </template>
          </q-input>
          <q-input borderless v-model="form.telefono" ref="telefono" name="telefono" placeholder="WhatsApp"
            class="q-px-sm campos_form" lazy-rules :rules="[rules.required]">
            <template v-slot:prepend>
              <q-icon name="whatsapp" color="accent" />
            </template>
          </q-input>
          <q-select borderless v-model="form['opcion[]']" ref="opcion" name="opcion[]" :options="['Campito', 'E. Básica', 'Bachillerato']"
            label="Escoge una opción" lazy-rules :rules="[rules.required]"
            class="q-px-sm campos_form">
            <template v-slot:prepend>
              <q-icon name="dashboard" color="accent" />
            </template>
          </q-select>
          <q-input ref="comentario" name="comentario" borderless v-model="form.comentario" type="textarea" placeholder="Escribe aqui tu mensaje"
            class="q-px-sm campos_form" lazy-rules :rules="[rules.required]">
            <template v-slot:prepend>
              <q-icon name="send" color="accent" />
            </template>
          </q-input>
           <div class="row justify-center q-pt-md">
            <q-btn rounded no-caps label="Solicitar una cita" type="submit" color="accent"
              class="buttom_accent my-font-bold" />
          </div>
        </q-form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'section-7',
  components: {
  },
  data () {
    return {
      form: {},
      rules: {
        required: (value) => !!value || ''
      }
    }
  },
  methods: {
    sendForm () {
      this.$q.loading.show({
        message: 'Enviando información'
      })
      this.$axios
        .post('formularioseccion7.php', this.form)
        .then((request) => {
          this.$q.notify({
            message: 'Enviado con exito',
            color: 'primary'
          })
          this.form = {}
          this.$q.loading.hide()
          console.log(request)
        })
        .catch((err) => {
          this.$q.loading.hide()
          console.log(err)
        })
    }
  }
}
</script>
