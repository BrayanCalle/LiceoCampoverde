<template>
  <div class="margin_top_all">
    <section-1 />
    <section-2 />
    <section-3 />
    <section-4 />
  </div>
</template>

<script>
import Section1 from '../components/home/Section1.vue'
import Section2 from '../components/home/Section2.vue'
import Section3 from '../components/home/Section3.vue'
import Section4 from '../components/home/Section4.vue'
export default {
  name: 'home',
  components: {
    Section1,
    Section2,
    Section3,
    Section4
  }
}
</script>
