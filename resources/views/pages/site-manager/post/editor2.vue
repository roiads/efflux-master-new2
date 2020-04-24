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
        <div id="gjs"></div>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "site-editor",
  data() {
    return {
      domains: {},
      domain: []
    };
  }
};
</script>



<style scoped>
</style>
