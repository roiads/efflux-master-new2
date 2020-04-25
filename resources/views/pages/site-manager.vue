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
        <b-card-group v-if="!domain" deck>
          <assets-domain-list :id="id"></assets-domain-list>
        </b-card-group>

        <b-card-group v-if="domain" deck>
          <assets-domain-show :domain="domain">{{domain}}</assets-domain-show>
        </b-card-group>

        <b-modal v-show="addDomain">
          <assets-domain-create :domain="domain">{{domain}}</assets-domain-create>
        </b-modal>

        
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

      addDomain: false,
      editDomain: false,


    };
  },
  methods:{

  },
};
</script>
<style scoped>
</style>
