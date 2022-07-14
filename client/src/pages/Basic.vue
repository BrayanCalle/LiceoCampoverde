<template>
  <div>
    <basic-1/>
    <basic-2/>
    <section-3/>
    <basic-3/>
    <basic-4/>
    <basic-5/>
  </div>
</template>

<script>
import Basic1 from '../components/Basic/Basic1'
import Basic2 from '../components/Basic/Basic2'
import Section3 from '../components/home/Section3'
import Basic3 from '../components/Basic/Basic3'
import Basic4 from '../components/Basic/Basic4'
import Basic5 from '../components/Basic/Basic5'

export default {
  name: 'home',
  components: {
    Basic1,
    Basic2,
    Section3,
    Basic3,
    Basic4,
    Basic5
  }
}
</script>
