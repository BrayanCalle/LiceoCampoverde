<template>
  <div>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-6 section-form relative-position">
        <h4 class="text-weight-bolder"><span class="bg-secondary text-white">Educamos </span><br/> para el mundo<br/> de mañana</h4>
        <img width="60%" src="/figuras/F-6.svg" alt="imagen"/>
        <p class="text-h5 text-weight-bolder text-right q-pt-lg">
          Permítenos <br> mostrarte lo <br> que podemos <br> hacer por <br> tu hijo
        </p>
      </div>

      <div class="col-12 col-sm-6 col-md-6 fondo_gris">
        <div class="row items-end q-gutter-x-md">
          <img width="30%" src="/figuras/F-2.svg" alt="imagen"/>
          <img src="/home/rostro.svg" alt="rostro"/>
        </div>
        <div>
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
            <q-select dense borderless v-model="form.selection" :options="['Opción 1', 'Opción 2']"
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
              <q-btn rounded dense no-caps label="Solicitar una cita" type="submit" color="accent" class="q-px-md"
                @click="form = {}"/>
            </div>
          </div>
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
