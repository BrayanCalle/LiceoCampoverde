<template>
  <div>
    <q-header flat class="bg-transparent">
      <div class="row justify-around">
        <logo />
        <actions-group class="col-auto" @menu="seeMenu()" />
      </div>
    </q-header>
  </div>
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
