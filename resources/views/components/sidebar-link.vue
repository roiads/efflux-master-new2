<template>
  <li class="nav-item">
    <b-link :to="url" class="nav-link">
      <b-icon :icon="ico" />
      <p v-text="title"></p>
    </b-link>
  </li>
</template>
<script>
export default {
  name: "x-sidebar-link",
  props: ["url", "icon", "title"],
  computed: {
    ico() {
      return this.icon || "chevron-compact-right";
    }
  },
  mounted() {}
};
</script>
