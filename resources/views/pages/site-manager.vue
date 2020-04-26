<template>
  <div>
    <div class="content-header">
      <b-container fluid class="row">
        <x-breadcrumb page="site-manager" :view="domain"></x-breadcrumb>
        <x-toolbar></x-toolbar>
      </b-container>
    </div>

    <section class="content">
      <b-card-group v-if="!domain" deck>
        <assets-domain-list @set-domain="setDomain"></assets-domain-list>
      </b-card-group>
      <assets-domain-show v-if="domain" :domain="domain" @create-post="createPost"></assets-domain-show>
      <b-modal id="createDomainForm">
        <assets-domain-create></assets-domain-create>
      </b-modal>
      <b-modal id="createPostForm">
        <site-manager-post-create></site-manager-post-create>
      </b-modal>
    </section>
  </div>
</template>
<script>
export default {
  name: "site-manager-page",
  props: ["domain", "post"],
  data() {
    return {
      createDomainForm: false,
      editDomainForm: false,
      createPostForm: false,
      editPostForm: false,
      domain: [],
      posts: [],
      pages: [],
      tags: []
    };
  },
  methods: {
    setDomain(domain) {
      this.domain = domain;
    },
    createPost() {
      this.$bvModal.show("createPostForm");
    }
  }
};
</script>
<style scoped>
</style>
