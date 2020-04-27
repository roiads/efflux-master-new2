<template>
  <b-card header="Posts" no-body>
    <b-table striped hover :items="posts" :fields="['title','image','routes']"></b-table>
  </b-card>
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
      axios
        .get(`/api/site-manager/post?page=${this.posts.current_page}`)
        .then(({ data }) => (this.posts = data));
    }
  }
};
</script>
<style scoped>
</style>