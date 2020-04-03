<template>
    <section class="content">
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <crumbs page="accounts" name="Payment Methods" :view="payment.cc"></crumbs>
            <tbar :id="payment.id"></tbar>
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
      payment: [],
      payments: [],
      form: new Form({
        'cc': ''
      })
    }
  },
  methods: {
    onSubmit() {
      this.form
        .post('/account/cc')
        .then(r => this.payments.push(r));
    },
    setId(id) {
      this.id = id;
    },
    setObj(obj) {
      this.payment = obj;
      this.$store.commit('setData', {
        name: 'payment',
        data: obj
      })
    }
  }
}
</script>
<style>
</style>
