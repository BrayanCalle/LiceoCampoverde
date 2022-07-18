<template>
  <div>
    <campito-1 />
    <campito-2 />
    <campito-3 />
    <section-3 />
    <campito-4 />
    <campito-5 />
    <campito-6 />
  </div>
</template>

<script>
import Campito1 from '../components/campito/Campito1'
import Campito2 from '../components/campito/Campito2'
import Campito3 from '../components/campito/Campito3'
import Section3 from '../components/home/Section3'
import Campito4 from '../components/campito/Campito4'
import Campito5 from '../components/campito/Campito5'
import Campito6 from '../components/campito/Campito6'

export default {
  name: 'Campito',
  components: {
    Campito1,
    Campito2,
    Campito3,
    Section3,
    Campito4,
    Campito5,
    Campito6
  }
}
</script>
