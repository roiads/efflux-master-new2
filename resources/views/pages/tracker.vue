<template>
  <div>
    <div class="content-header">
      <b-container fluid class="row">
        <x-breadcrumb page="tracker"></x-breadcrumb>
        <!-- TOOLBAR -->
        <b-btn-toolbar size="sm" class="m-2">
          <b-btn size="sm" class="m-1" @click="domain = ''">All Time</b-btn>
        </b-btn-toolbar>
      </b-container>
    </div>
    <section class="content">
      <div class="container-fluid">
        <reporting-system1></reporting-system1>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "tracker",
  data() {
    return {
      domain: ""
    };
  }
};
</script>
<style scoped>
</style>