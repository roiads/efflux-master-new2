<template>
  <div>

    <b-button @click="this.$emit('myEvent')"></b-button>
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
      axios
        .get(`/api/site-manager/profile?page=${this.profiles.current_page}`)
        .then(({ data }) => (this.profiles = data));
    }
  }
};
</script>
<style scoped>
</style>