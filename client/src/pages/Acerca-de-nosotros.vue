<template>
    <q-page>
        <div class="main">
            <seccion1adn />
            <!-- <seccion2adn />
            <seccion3adn />
            <seccion4adn />
            <seccion5adn />
            <seccion6adn />
            <seccion7adn />
            <seccion8adn />
            <seccion9adn />
            <seccion10adn /> -->
        </div>
    </q-page>
</template>

<style lang="scss" scoped >
@import 'src/css/app.scss';

// Sección 2
// Section 3
// < =================== Sección4 =================== >
// < =================== Sección5 =================== >
// < =================== Sección6 =================== >
// < =================== Sección7 =================== >
// < =================== Sección8 =================== >
// < =================== Sección9 =================== >
// < =================== Sección10 =================== >
</style>

<script>
import Seccion1adn from '../components/acerca-de-nosotros/seccion1adn.vue'
// import Seccion2adn from '../components/acerca-de-nosotros/seccion2adn.vue'
// import Seccion3adn from '../components/acerca-de-nosotros/seccion3adn.vue'
// import Seccion4adn from '../components/acerca-de-nosotros/seccion4adn.vue'
// import Seccion5adn from '../components/acerca-de-nosotros/seccion5adn.vue'
// import Seccion6adn from '../components/acerca-de-nosotros/seccion6adn.vue'
// import Seccion7adn from '../components/acerca-de-nosotros/seccion7adn.vue'
// import Seccion8adn from '../components/acerca-de-nosotros/seccion8adn.vue'
// import Seccion9adn from '../components/acerca-de-nosotros/seccion9adn.vue'
// import Seccion10adn from '../components/acerca-de-nosotros/seccion10adn.vue'

export default {
  name: 'acerca-de-nosotros',
  components: {
    Seccion1adn
    // Seccion2adn,
    // Seccion3adn,
    // Seccion4adn,
    // Seccion5adn,
    // Seccion6adn,
    // Seccion7adn,
    // Seccion8adn,
    // Seccion9adn,
    // Seccion10adn
  },
  setup () {
    return {
      lorem: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo.'
    }
  }
}
</script>
