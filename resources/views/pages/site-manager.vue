<template>
  <div>
    <page-header :crumbs="crumbs">
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
    </page-header>
    <!-- HEADER -->

    <h1>{{domainName}}</h1>
    <!-- END HEADER -->
    <section class="content">
      <h2>Start in Domains!...</h2>
      <b-button block variant="warning" to="/assets/domains/">Domain Manager..</b-button>
    </section>
  </div>
</template>
<script>
export default {
  name: "site-manager",
  data() {
    return {
      crumbs: [["assets", "/assets/"], ["domain manager"]],
      domain: {},
      domains: []
    };
  },
  computed: {
    domainName() {
      return this.domain.name ?? "Select A Domain First Please...";
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
