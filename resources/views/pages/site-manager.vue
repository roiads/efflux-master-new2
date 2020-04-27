<template>
  <div class="container-fluid">
    <!-- HEADER -->
    <div class="page-header">
      <div class="row">
        <x-breadcrumb page="site-manager" :name="domain.name"></x-breadcrumb>
        <!-- TOOLBAR -->
        <b-btn-toolbar class="py-2">
          <b-btn size="sm" class="m-1" @click="createDomain" variant="success">New Domain</b-btn>
          <template v-if="domain.id">
            <b-btn-group size="sm" class="site-manager-toolbar p-2">
              <b-btn @click="createPost">+ Post</b-btn>
              <b-btn @click="createPage">+ Page</b-btn>
              <b-btn @click="createImage">+ Image</b-btn>
              <b-btn @click="createImage">+ Route</b-btn>
              <b-btn @click="createTag">+ Tag</b-btn>
            </b-btn-group>
            <b-btn-group>
              <b-btn size="sm" class="m-1" @click="editDomain">Edit</b-btn>
              <b-btn size="sm" class="m-1" @click="closeDomain" variant="danger">Close</b-btn>
            </b-btn-group>
          </template>
        </b-btn-toolbar>
        <!-- END TOOLBAR -->
      </div>
      <h1>{{domainName}}</h1>
    </div>
    <!-- END HEADER -->
    <section class="content">
      <assets-domain-list v-if="!domain.id" @set-domain="setDomain"></assets-domain-list>
      <assets-domain-show v-if="domain.id" :id="domain.id"></assets-domain-show>
      <!-- MODALS -->
      <b-modal no-stacking id="assets-domain-edit" size="lg" :title="'Edit '+domain.name">
        <assets-domain-edit :id="domain.id"></assets-domain-edit>
      </b-modal>
      <b-modal no-stacking id="assets-domain-create" size="lg" title="New Domain">
        <assets-domain-create></assets-domain-create>
      </b-modal>
      <!-- END MODALS -->
    </section>
  </div>
</template>
<script>
export default {
  name: "site-manager",
  data() {
    return {
      domain: {},
      domains: []
    };
  },
  computed: {
    domainName() {
      return this.domain.name ?? "Domain Names";
    }
  },
  methods: {
    setDomain(domain) {
      this.domain = domain[0] ?? domain;
    },
    editDomain() {
      this.$bvModal.show("assets-domain-edit");
    },
    createDomain() {
      this.$bvModal.show("assets-domain-create");
    },
    closeDomain() {
      this.domain = "";
    }
  }
};
</script>
<style scoped>
</style>
