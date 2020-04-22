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
        <!--<entourage-type-list></entourage-type-list>-->
        <!--<entourage-profile-list></entourage-profile-list>-->
        <entourage-profile-list></entourage-profile-list>
        <!--<entourage-profile></entourage-profile>-->
        <!--<entourage-account></entourage-account>-->
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "entourage-page",
  props: ["user", "type", "profile", "account"],
  data() {
    return {
      profiles: [],
      accounts: [],
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
