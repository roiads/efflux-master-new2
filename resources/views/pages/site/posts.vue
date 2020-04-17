<template>
  <div>
    <div class="content-header">
      <b-container fluid class="row">
        <x-breadcrumb page="site-manager"></x-breadcrumb>
        <x-toolbar></x-toolbar>
      </b-container>
    </div>
    <section class="content">
      <div class="row">
        <site-post-list @setPost="setPost"></site-post-list>
        <editor :post="post"></editor>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "posts",
  created() {},
  data() {
    return {
      post: {},
      posts: [],
      form: new Form({
        name: ""
      })
    };
  },
  methods: {
    onSubmit() {
      this.form.post("/site/post").then(r => this.posts.push(r));
    },
    setPost(post) {
      this.post = post;
    }
  }
};
</script>
<style>
</style>
