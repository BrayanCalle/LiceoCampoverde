<template>
  <div id="q-app" class="my-font">
    <router-view />
  </div>
</template>

<script>
import AOS from 'aos'
import 'aos/dist/aos.css'
import Vue from 'vue'
import App from './App'

// test
export default {
  name: 'App'
}

// test
new Vue({
  render: (h) => h(App),
  mounted () {
    AOS.init()
  }
}).$mount('#app')

</script>
