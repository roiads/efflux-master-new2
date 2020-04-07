<template>
  <section class="content">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <crumbs page="posts" :name="post.title"></crumbs>
          <tbar :id="post.id" @addClick="addClick" @editClick="editClick" @closeClick="closeClick"></tbar>
        </div>
        <h1>Posts</h1>
      </div>
      <div class="row">
        <xList @setPost="setPost"></xList>
        <xEditor :post="post" @setObj="setObj"></xEditor>
      </div>
    </div>
  </section>
</template>
<script>
import xList from "./post/list";
import xEditor from "./post/editor";
export default {
  name: "posts",
  components: {
    xList,
    xEditor
  },
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
      this.form.post("/content/post").then(r => this.posts.push(r));
    },
    setPost(post) {
      this.post = post;
    },
    setObj(obj) {
      this.post = obj;
      this.$store.commit("setData", {
        name: "post",
        data: obj
      });
    },
    addClick() {
      console.log("add");
    },
    editClick() {
      console.log("edit");
    },
    closeClick() {
      console.log("close");
    }
  }
};
</script>
<style>
</style>
