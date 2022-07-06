<template>
  <div class="margin_top_all">
    <section-1 />
    <section-2 />
  </div>
</template>

<script>
import Section1 from '../components/home/Section1.vue'
import Section2 from '../components/home/Section2.vue'
export default {
  name: 'home',
  components: {
    Section1,
    Section2
  }
}
</script>
