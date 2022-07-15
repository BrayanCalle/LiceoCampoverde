<template>
  <div>
    <q-card flat class="full-height" @click="$router.push({ name: 'blog-detail', params: { id: data.id } })">
      <q-img :src="data.image" style="height:40%;border-bottom-right-radius: 100%; cursor:pointer"/>

      <q-card-section class="q-pb-lg" :style="`height: 60%;background-color: ${data.color}`">
        <div class="absolute-right q-pr-sm" style="top:-30px">
          <q-avatar size="60px">
            <img :src="data.user.perfil" />
          </q-avatar>
        </div>

        <div class="column items-end q-pt-md">
          <div class="font_small">{{data.user.name}} || {{data.date}}</div>
          <div class="text-subtitle2">{{data.type}}</div>
        </div>

        <div class="q-px-md q-pt-lg q-pb-xl text-h5 my-font-bold">
          {{ data.title }}
        </div>

        <div class="absolute-bottom q-pa-sm">
          <q-btn round dense color="black" icon="add" />
        </div>
      </q-card-section>
    </q-card>
  </div>
</template>

<script>
export default {
  props: {
    data: {
      type: Object,
      required: true
    }
  }
}
</script>
