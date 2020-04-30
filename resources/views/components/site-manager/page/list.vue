<template>
  <b-card header="Pages" no-body>
    <b-table striped hover :items="pages" :fields="['title','image','routes']"></b-table>
  </b-card>
</template>
<script>
export default {
  name: "site-page-list",
  props: ["domain"],
  data() {
    return {
      pages: []
    };
  },
  mounted() {
    this.getPosts();
  },
  methods: {
    getPosts() {
      axios
        .get(`/api/site-manager/page?page=${this.pages.current_page}`)
        .then(({ data }) => (this.pages = data));
    }
  }
};
</script>
<style scoped>
</style>