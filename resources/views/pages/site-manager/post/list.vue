<template>
  <div>
    <b-table striped hover :items="posts"></b-table>
  </div>
</template>
<script>
export default {
  name: "site-post-list",
  props: ["domain"],
  data() {
    return {
      posts: []
    };
  },
  mounted() {
    this.getPosts();
  },
  methods: {
    getPosts() {
      return 1;
    }
  }
};
</script>
<style scoped>
</style>