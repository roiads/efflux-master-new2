<template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <h3>Reports</h3>
        </div>
      </div>
    </section>
</template>
<script>
import xAdd from './reports/add'
import xOverview from './reports/overview'
import xList from './reports/list'
import xTable from './reports/table'
export default {
  name: 'reports',
  components: {
    xList,
    xTable,
    xOverview,
    xAdd
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
    axios.get('/report')
      .then(r => this.items = r);
  },
  methods: {
    onSubmit() {
      this.form
        .post('/report')
        .then(r => this.items.push(r));
    }
  }
}
</script>
<style>
</style>
