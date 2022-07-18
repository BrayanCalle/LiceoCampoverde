<template>
  <q-header flat class="bg-transparent">
    <!-- Se muestra si la pantalla es grande -->
    <div class="row no-wrap justify-around web_element">
      <logo class="col-auto" />
      <div class="col-9">
        <actions-group @menu="seeMenu()" />
      </div>
    </div>

    <!-- Se muestra si la pantalla es pequeña -->
    <div class="mobile_element">
      <logo class="col-12" @menu="seeMenu()" />
    </div>
  </q-header>
</template>

<script>
import Logo from 'components/layouts/header/Logo'
import ActionsGroup from 'components/layouts/header/ActionsGroup'
export default {
  name: 'header-big',
  components: {
    Logo,
    ActionsGroup
  },
  methods: {
    seeMenu () {
      this.$emit('menu')
    }
  }
}
</script>
