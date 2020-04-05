<template>
    <section class="content">
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <crumbs page="payments" :name="paymentMethod.cc"></crumbs>
            <tbar :id="paymentMethod.id"></tbar>
          </div>
          <h1>Payment Methods</h1>
        </div>
        <div class="row">
          <xList @setId="setId"></xList>
          <xOview :id="id" @setObj="setObj"></xOview>
        </div>
      </div>
    </section>
</template>
<script>
import xAdd from './payments/add'
import xOview from './payments/overview'
import xList from './payments/list'
import xTable from './payments/table'
export default {
  name: 'payments',
  components: {
    xList,
    xTable,
    xOview,
    xAdd
  },
  data() {
    return {
      id: 0,
      paymentMethod: [],
      paymentMethods: [],
      form: new Form({
        'name': ''
      })
    }
  },
  created() {
    axios.get('/payment')
      .then(r => this.paymentMethods = r);
  },
  methods: {
    onSubmit() {
      this.form
        .post('/payment')
        .then(r => this.paymentMethods.push(r));
    },
    setId(id) {
      this.id = id;
    },
    setObj(obj) {
      this.paymentMethod = obj;
    }
  }
}
</script>
<style>
</style>
