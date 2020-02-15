<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <h3>Pages</h3>
        </div>
      </div>
    </section>
  </div>
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
      items: [],
      form: new Form({
        'name': ''
      })
    }
  },
  created() {
    axios.get('/page')
      .then(r => this.items = r);
  },
  methods: {
    onSubmit() {
      this.form
        .post('/page')
        .then(r => this.items.push(r));
    }
  }
}
</script>
<style>
</style>
