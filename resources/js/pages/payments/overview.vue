<template>
  <div class="col-sm-8 col-md-7 col-lg-6" id="payment-overview">
    <div class="jumbotron mx-auto bg-gradient-primary cc-template animated zoomInDown fast" v-if="payment.cc">
      <div class="row">
        <div class="col-12 text-right">
          <i :class="'fab fa-cc-'+payment.type"></i>
        </div>
      </div>
      <h3 class="my-2">{{ payment.cc }}</h3>
      <div class="row">
        <div class="col-6">
          <p>exp: {{ payment.exp }}</p>
        </div>
        <div class="col-6">
          <p>cvv: {{ payment.cvv }}</p>
        </div>
      </div>
    </div>
    <div class="card animated fadeInDown fast card-light" v-if="payment.cc">
      <div class="card-body">
        <h4>Balance: <span class="text-success">${{ payment.balance }}</span></h4>
        <hr>
        <h3>Linked Accounts</h3>
        <form>
          <label>Link Account: </label>
          <input type="text" class="form-control">
          <input type="submit" value="go" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ['id'],
  data() {
    return {
      payment: {}
    }
  },
  created() {

  },
  watch: {
    id: function(newVal, oldVal) { // watch it

      this.getPaymentMethod();
    }
  },
  methods: {
    getPaymentMethod() {
      axios.get('/payment/' + this.id)
        .then(({
          data
        }) => this.$emit('setObj', (this.payment = data)));
    }
  }
}
</script>
