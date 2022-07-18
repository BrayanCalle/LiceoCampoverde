<template>
  <div class="margin_top_all">
    <section-1 />
    <section-2 />
    <section-3 />
    <section-4 />
    <section-5 />
    <section-6 />
    <section-7 />
    <section-8 />
  </div>
</template>

<script>
import Section1 from '../components/home/Section1.vue'
import Section2 from '../components/home/Section2.vue'
import Section3 from '../components/home/Section3.vue'
import Section4 from '../components/home/Section4.vue'
import Section5 from '../components/home/Section5.vue'
import Section6 from '../components/home/Section6.vue'
import Section7 from '../components/home/Section7.vue'
import Section8 from '../components/home/Section8.vue'
export default {
  name: 'home',
  components: {
    Section1,
    Section2,
    Section3,
    Section4,
    Section5,
    Section6,
    Section7,
    Section8
  }
}
</script>
