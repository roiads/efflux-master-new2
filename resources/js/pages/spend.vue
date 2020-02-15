<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <xList @paymentOverview="paymentOverview"></xList>
          <xOverview :id="id"></xOverview>
        </div>
      </div>
    </section>
  </div>
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
    setPaymentID(id) {
      this.id = id;
    },
    paymentOverview(id) {
      this.setPaymentID(id);
    }
  }
}
</script>
<style>
</style>
