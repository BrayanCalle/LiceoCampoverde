<template>
  <div>
    <q-card flat class="bg-grey-3 q-py-md border_bottom_left border_bottom_right q-px-md row justify-between">
      <img src="logo/liceo-campoverde-cumbaya.svg" style="width:100px; cursor:pointer"
        @click="$router.push({ name: 'home' })" />

      <!-- Se muestra si la pantalla es pequeña -->
      <div class="mobile_element row items-center justify-end no-wrap text-grey-8">
        <q-icon name="account_circle" color="grey-8" size="md" />
        <div class="q-pl-sm">Usuario</div>
        <q-btn icon="menu" flat round color="grey-8" size="lg" @click="$emit('menu')" />
      </div>
    </q-card>
  </div>
</template>
