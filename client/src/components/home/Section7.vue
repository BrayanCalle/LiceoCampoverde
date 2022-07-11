<template>
  <div>
    <div class="row">
      <div class="col-12 col-md-6 section-form relative-position">
        <h4 class="text-weight-bolder"><span class="bg-secondary text-white">Educamos </span><br/> para el mundo<br/> de mañana</h4>
        <img width="60%" src="/figuras/F-6.svg" alt="imagen"/>
        <p class="text-h5 text-weight-bolder text-right q-pt-lg">
          Permítenos <br> mostrarte lo <br> que podemos <br> hacer por <br> tu hijo
        </p>
      </div>

      <div class="col-12 col-md-6 fondo_gris">
        <div class="row items-end q-gutter-x-md">
          <img width="30%" src="/figuras/F-2.svg" alt="imagen"/>
          <img src="/home/rostro.svg" alt="rostro"/>
        </div>
        <div>
          <form class="form column items-center">
            <input type="text" placeholder="Nombre y apellido"/>
            <input type="email" placeholder="mimailprincipal@mail.com" />
            <input type="number" placeholder="WhatsApp" />
            <select>
              <option>Escoge una opción</option>
              <option value="saab">Saab</option>
              <option value="mercedes">Mercedes</option>
              <option value="audi">Audi</option>
            </select>
            <textarea name="" id="" cols="20" rows="5" placeholder="Escribe aquí tu mensaje …."></textarea>
            <button>Solicitar una cita</button>
          </form>
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
    }
  }
}
</script>
