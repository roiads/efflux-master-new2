<template>
  <div>
    <div class="content-header">
      <b-container fluid class="row">
        <x-breadcrumb page="site-manager"></x-breadcrumb>
        <x-toolbar></x-toolbar>
      </b-container>
    </div>
    <section class="content">
      <div class="container-fluid">
        <b-card-group deck>
          <site-domain-list></site-domain-list>
        </b-card-group>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "site-manager",
  components: {},
  data() {
    return {
      domain: {},
      domains: [],
      route: {},
      routes: [],
      page: {},
      pages: [],
      post: {},
      posts: []
    };
  }
};
</script>
<style>
</style>
