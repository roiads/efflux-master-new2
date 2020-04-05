<template>
    <section class="content">
      <div class="container-fluid">
        <div class="page-header">
          <crumbs page="spend" :name="spend.cc"></crumbs>
          <!-- <tbar></tbar> -->
          <h1>Domain Manager</h1>
        </div>
        <div class="row">
          <xList @setId="setId"></xList>
          <xOverview :id="id" @setObj="setObj"></xOverview>
        </div>
      </div>
    </section>
</template>
<script>
import xAdd from './payments/add'
import xOverview from './payments/overview'
import xList from './payments/list'
import xTable from './payments/table'
export default {
  name: 'payments',
  components: {
    xList,
    xTable,
    xOverview,
    xAdd
  },
  data() {
    return {
      id: 0,
      items: [],
      form: new Form({
        'name': ''
      })
    }
  },
  created() {
    axios.get('/payment')
      .then(r => this.items = r);
  },
  methods: {
    onSubmit() {
      this.form
        .post('/payment')
        .then(r => this.items.push(r));
    },
    setId(id) {
      this.id = id;
    },
    setObj(obj) {
      this.payment = obj;
    }
  }
}
</script>
<style>
</style>
