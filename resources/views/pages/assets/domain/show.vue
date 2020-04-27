<template>
  <b-card :header="domain.name" no-body>
    <b-tabs pills>
      <b-tab title="Posts" active @click="$emit('load-modal','site-post-create')">
        <site-post-list :posts="domain.posts"></site-post-list>
      </b-tab>
      <b-tab title="Pages">
        <site-page-list :pages="domain.pages"></site-page-list>
      </b-tab>
      <b-tab title="Routes">
        <site-route-list :routes="domain.routes"></site-route-list>
      </b-tab>
    </b-tabs>
  </b-card>
</template>
<script>
export default {
  name: "assets-domain-show",
  props: ["domain"],
  data() {
    return {
      posts: []
    };
  },
  mounted() {},
  computed: {},
  methods: {}
};
</script>
<style scoped>
</style>