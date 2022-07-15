<template>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-6 contenedor_section7 q-pt-xl">
      <div class="my-font-ultra title_1 padding_section7" style="height: 30vh">
        <span class="bg-secondary text-white q-px-md">Educamos </span><br/>
        para el mundo<br/>
        de mañana
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
          <img src="home/rostro.svg" alt="rostro" style="height:calc(15vh + 1vw)"/>
        </div>
      </div>

      <div class="column items-center q-gutter-y-xs q-py-lg">
        <q-input dense borderless v-model="form.name" label="Nombre y apellido" label-color="indigo-8"
          class="q-px-sm campos_form">
          <template v-slot:prepend>
            <q-avatar square>
              <img src="iconInfo/I-user.svg">
            </q-avatar>
          </template>
        </q-input>
        <q-input dense borderless v-model="form.email" type="email" placeholder="mimailprincipal@mail.com" label-color="indigo-8"
          class="q-px-sm campos_form">
          <template v-slot:prepend>
            <q-avatar square>
              <img src="iconInfo/I-correo-morado.svg">
            </q-avatar>
          </template>
        </q-input>
        <q-input dense borderless v-model="form.phone" label="WhatsApp" label-color="indigo-8"
          class="q-px-sm campos_form">
          <template v-slot:prepend>
            <q-icon name="whatsapp" color="accent" />
          </template>
        </q-input>
        <q-select dense borderless v-model="form.selection" :options="['Campito', 'E. Básica', 'Bachillerato']"
          label="Escoge una opción" label-color="indigo-8"
          class="q-px-sm campos_form">
          <template v-slot:prepend>
            <q-icon name="dashboard" color="accent" />
          </template>
        </q-select>
        <q-input dense borderless v-model="form.comment" type="textarea" label="Escribe aqui tu mensaje" label-color="indigo-8"
          class="q-px-sm campos_form">
          <template v-slot:prepend>
            <q-icon name="send" color="accent" />
          </template>
        </q-input>

        <div class="row justify-center q-pt-md">
          <q-btn rounded dense no-caps label="Solicitar una cita" type="submit" color="accent" class="buttom_accent my-font-bold"
            @click="form = {}"/>
        </div>
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
      form: {}
    }
  }
}
</script>
