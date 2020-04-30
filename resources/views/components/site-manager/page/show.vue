<template>
  <div>
    <div class="content-header">
      <b-container fluid class="row">
        <x-breadcrumb page="inside-page-domain"></x-breadcrumb>
        
      </b-container>
    </div>
    <section class="content">
      <div class="container-fluid">
       
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "site-manager-show",
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
