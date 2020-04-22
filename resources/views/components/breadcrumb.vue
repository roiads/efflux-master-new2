<template>
  <b-breadcrumb class="col">
    <b-breadcrumb-item to="/">
      <b-icon icon="house-fill" scale="1.25" shift-v="1.75" aria-hidden="true"></b-icon>Home
    </b-breadcrumb-item>
    <b-breadcrumb-item v-if="page" :to="page" v-html="page"></b-breadcrumb-item>
    <b-breadcrumb-item v-if="view" :to="view" v-html="view"></b-breadcrumb-item>
    <b-breadcrumb-item v-if="name" :to="name" v-html="name"></b-breadcrumb-item>
  </b-breadcrumb>
</template>
<script>
export default {
  name: "x-breadcrumb",
  props: ["page", "view", "name"],
  data() {
    return {};
  }
};
</script>
<style scoped>
li.breadcrumb-item {
  text-transform: capitalize;
}
</style>