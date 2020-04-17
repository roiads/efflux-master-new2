<template>
  <div>
    <div class="content-header">
      <b-container fluid class="row">
        <x-breadcrumb page="entourage" :view="type"></x-breadcrumb>
        <x-toolbar></x-toolbar>
      </b-container>
    </div>
    <section class="content">
      <div class="container-fluid">
        <entourage-profile-list></entourage-profile-list>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "entourage",
  props: ["type"],
  data() {
    return {
      profile: {},
      profiles: [],
      account: {},
      accounts: [],
      type: {},
      types: []
    };
  },
  mounted() {},
  created() {},
  methods: {},
  computed: {}
};
</script>
<style>
</style>
