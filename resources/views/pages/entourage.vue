<template>
  <div>
    <div class="content-header">
      <b-container fluid class="row">
        <x-breadcrumb page="entourage"></x-breadcrumb>
        <x-toolbar></x-toolbar>
      </b-container>
    </div>
    <section class="content">
      <div class="container-fluid">
        <b-card-group deck>
          <entourage-profile-list></entourage-profile-list>
        </b-card-group>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "entourage",
  props: [],
  data() {
    return {};
  },
  mounted() {},
  created() {},
  methods: {},
  computed: {}
};
</script>
<style>
</style>
