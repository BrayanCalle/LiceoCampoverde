<template>
  <div >
    <bachiller-1 />
    <bachiller-2 />
    <bachiller-3 />
    <bachiller-4 />
    <bachiller-5 />
    <bachiller-6 />
  </div>
</template>

<script>
import Bachiller1 from '../components/bachillerato/Bachillerato1'
import Bachiller2 from '../components/bachillerato/Bachillerato2'
import Bachiller3 from '../components/bachillerato/Bachillerato3'
import Bachiller4 from '../components/bachillerato/Bachillerato4'
import Bachiller5 from '../components/bachillerato/Bachillerato5'
import Bachiller6 from '../components/bachillerato/Bachillerato6'

export default {
  name: 'home',
  components: {
    Bachiller1,
    Bachiller2,
    Bachiller3,
    Bachiller4,
    Bachiller5,
    Bachiller6
  }
}
</script>
