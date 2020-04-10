<template>
  <li class="nav-item">
    <b-link :to="url" class="nav-link h5">
      <b-icon :icon="ico" variant="gray" class="mr-2"></b-icon>
      <p v-text="title"></p>
    </b-link>
  </li>
</template>
<script>
export default {
  name: "side-navbar-link",
  props: ["url", "icon", "title"],
  computed: {
    ico() {
      return this.icon || "chevron-compact-right";
    }
  },
  mounted() {}
};
</script>
