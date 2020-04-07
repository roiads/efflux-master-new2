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
        <div class="row">
          <xList @setPage="setPage"></xList>
          <xEditor :page="page"></xEditor>
        </div>
      </div>
    </section>
</template>
<script>
import xAdd from './pages/add'
import xOverview from './pages/overview'
import xList from './pages/list'
import xTable from './pages/table'
import xEditor from './pages/editor'
export default {
  name: 'pages',
  components: {
    xList,
    xTable,
    xOverview,
    xAdd,
    xEditor
  },
  data() {
    return {
      page: {},
      pages: [],
      form: new Form({
        'name': ''
      })
    }
  },
  created() {},
  methods: {
    onSubmit() {
      this.form
        .post('/content/page')
        .then(r => this.pages.push(r));
    },
    setPage(page) {
      this.page = page;
    },
    setObj(obj) {
      this.page = obj;
      this.$store.commit('setData', {
        name: 'page',
        data: obj
      })
    }
  }
}
</script>
<style>
</style>
