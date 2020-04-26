<template>
  <div>
    <b-button @click="this.$emit('myEvent')">TEST</b-button>
    <b-table striped hover :items="posts"></b-table>
  </div>
</template>
<script>
export default {
  name: "site-manager-post-list",
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