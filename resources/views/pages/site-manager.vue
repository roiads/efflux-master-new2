<template>
  <section class="content">
    <h1>Domain Names</h1>
    <template v-if="domain">
      <assets-domain-show :domain="domain" @load-modal="loadModal"></assets-domain-show>
    </template>

    <assets-domain-list v-else @set-domain="setDomain"></assets-domain-list>

    <b-modal v-show="modal" id="mdl">
      <component v-bind:is="currentTabComponent"></component>
    </b-modal>
  </section>
</template>
<script>
export default {
  name: "SiteManager",
  props: ["domain"],
  data() {
    return {
      modal: false,
      domains: []
    };
  },
  computed: {
    currentTabComponent() {
      return this.modal;
    }
  },
  methods: {
    loadModal(modal) {
      this.modal = modal;
    },
    setDomain(domain) {
      this.domain = domain;
    }
  }
};
</script>
<style scoped>
</style>
