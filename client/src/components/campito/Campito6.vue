<template>
    <section class="">
      <div class="bg-accent schedule row q-gutter-x-xl justify-center">
        <div class="col-12 col-md-5">
          <div class="row q-gutter-y-md ">
            <div class="col-6 bg-white text-center relative-position">
              <h3>Horario</h3>
            <button class="butons" style="background-color: #6B645F;">
              <img width="100%"  src="/figuras/+.svg" alt="imagen"/>
            </button>
            </div>
            <div class="col-6 bg-primary q-p-sm">
              <img width="100%" style="margin: auto ; display: flex;" src="/figuras/F-C-5.svg" alt="imagen"/>
            </div>
            <div class="col-6 bg-white text-center relative-position">
              <h3>Menú Campito</h3>
            <button class="butons" style="background-color: #6B645F;">
              <img width="100%"  src="/figuras/+.svg" alt="imagen"/>
            </button>
            </div>
            <div class="col-6 bg-primary">
              <img width="100%" style="margin: auto ; display: flex;" src="/figuras/F-C-6.svg" alt="imagen"/>
            </div>
          </div>
        </div><br/>
        <div class="col-12 col-md-5">
          <div class="row q-gutter-y-md relative-position">
            <div class="col-6 bg-white text-center relative-position">
              <h4>Calendario de actividades </h4>
            <button class="butons" style="background-color: #6B645F;">
              <img width="100%"  src="/figuras/+.svg" alt="imagen"/>
            </button>
            </div>
            <div class="col-6 bg-primary">
              <img width="85%" style="margin: auto ; display: flex;" src="/figuras/F-C-9.svg" alt="imagen"/>
            </div>
             <div class="col-6 bg-white text-center relative-position">
              <h3>Idiomas</h3>
            <button class="butons" style="background-color: #6B645F;">
              <img width="100%"  src="/figuras/+.svg" alt="imagen"/>
            </button>
            </div>
            <div class="col-6 bg-primary">
              <img width="100%" style="margin: auto ; display: flex;" src="/figuras/F-C-7.svg" alt="imagen"/>
            </div>
          </div>
        </div>
      </div>

      <div class="section-forms">
        <div class="row">
          <div class="col-12 col-md-6 section-form relative-position">
            <h4 class="text-weight-bold"><span class="bg-secondary text-white">Educamos </span><br/> para el mundo<br/> de mañana</h4>
            <img width="60%" src="/figuras/F-6.svg" alt="imagen"/>
            <p class="text-h4">
              Permítenos mostrarte lo que podemos hacer por tu hijo
            </p>
          </div>
          <div class="col-12 col-md-6" style="background-color: #E5E1D3;">
            <img width="30%" src="/figuras/F-2.svg" alt="imagen"/>
            <form class="form">
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
    </section>
</template>

<script>
export default {
  name: 'campito-6'
}
</script>
