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
          <domain-list></domain-list>
        </b-card-group>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "site-manager-page",
  props: ["domain"],
  data() {
    return {
      domain: {}
    };
  }
};
</script>
<style>
</style>
