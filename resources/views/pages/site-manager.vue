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
    }
  }
};
</script>
<style scoped>
</style>
