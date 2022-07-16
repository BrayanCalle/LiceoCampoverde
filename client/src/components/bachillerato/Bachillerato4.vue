<template>
   <section>
    <div class="row">
      <div class="col-12 col-md-6">
        <img width="100%" src="bachillerato/B-4.png" alt="imagen"/>
      </div>
      <div class="col-12 col-md-6">
        <div class="q-px-xl q-py-xl ">
          <p class="text-h3 text-weight-bold  my-font-ultra">Nuestra <br/><span class="text-white bg-accent q-px-md">metodología</span></p>
          <p class="text-h4 text-weight-medium">busca su desarrollo integral</p>
        </div>
        <div class="q-px-xl">
          <p class="text-h5 text-weight-bold my-font-bold" style="padding-right: 10rem;">
            Desafiamos la educación tradicional para lograr aprendizajes integrales en nuestros estudiantes
          </p>
        </div>
        <div class="bachillerato_four">
          <div class="">
              <q-btn-dropdown label="AP Program" >
                <q-list >
                  <q-item clickable v-close-popup>
                    <q-item-section>
                      <q-item-label>
                        Los estudiantes se familiarizan con la metodología <br/> universitaria y pueden adquirir créditos para la<br/> universidad desde el bachillerato.
                      </q-item-label>
                    </q-item-section>
                  </q-item>
                </q-list>
              </q-btn-dropdown>
          </div>
          <div class="">
              <q-btn-dropdown label="Ciudadanía">
                <q-list>
                  <q-item clickable v-close-popup>
                    <q-item-section>
                      <q-item-label>
                        Inculcamos el respeto por nuestra cultura<br/> y cómo nuestras acciones aportan <br/>a la construcción de una mejor sociedad.
                      </q-item-label>
                    </q-item-section>
                  </q-item>
                </q-list>
              </q-btn-dropdown>
          </div>
          <div class="">
              <q-btn-dropdown label="Carácter">
                <q-list>
                  <q-item clickable v-close-popup>
                    <q-item-section>
                      <q-item-label>
                        Promovemos el desarrollo de habilidades blandas <br/>mediante nuestro programa de Fortalezas del <br/>Carácter. ¡Somos Perseverantes!
                      </q-item-label>
                    </q-item-section>
                  </q-item>
                </q-list>
              </q-btn-dropdown>
          </div>
           <div class="">
              <q-btn-dropdown label="Intercambios">
                <q-list>
                  <q-item clickable v-close-popup>
                    <q-item-section>
                      <q-item-label>
                        Vivimos experiencias inolvidables y fortalecemos<br/> habilidades lingüísticas y de liderazgo.
                      </q-item-label>
                    </q-item-section>
                  </q-item>
                </q-list>
              </q-btn-dropdown>
           </div>
        </div>
      </div>
    </div>
   </section>
</template>

<script>
export default {
  name: 'bachiller-4'
}
</script>
