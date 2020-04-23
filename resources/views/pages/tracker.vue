<template>
  <div>
    <div class="content-header">
      <b-container fluid class="row">
        <x-breadcrumb page="tracker" :view="type"></x-breadcrumb>
        <x-toolbar></x-toolbar>
      </b-container>
    </div>
    <section class="content">
      <div class="container-fluid">
        <system1-subids></system1-subids>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "tracker",
  props: [],
  data() {
    return {};
  },
  methods: {
    reverseMessage: function() {
      return this.message
        .split("")
        .reverse()
        .join("");
    }
  },
  created() {},
  computed: {
    data: function() {
      return "data";
    }
  },
  mounted() {}
};
</script>
<style scoped>
</style>