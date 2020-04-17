<template>
  <section class="content">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <crumbs page="pages" :name="page.name"></crumbs>
          <tbar :id="page.id"></tbar>
        </div>
        <h1>Pages</h1>
      </div>
      <div class="row"></div>
    </div>
  </section>
</template>
<script>
export default {
  name: "pages",
  components: {},
  data() {
    return {
      id: 0,
      page: [],
      pages: [],
      form: new Form({
        name: ""
      })
    };
  },
  created() {},
  methods: {
    onSubmit() {
      this.form.post("/content/page").then(r => this.pages.push(r));
    },
    setId(id) {
      this.id = id;
    },
    setObj(obj) {
      this.page = obj;
      this.$store.commit("setData", {
        name: "page",
        data: obj
      });
    }
  }
};
</script>
<style>
</style>
