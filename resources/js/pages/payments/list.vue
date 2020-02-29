<template>
  <div class="col-sm-4 col-lg-3">
    <div class="card animated fadeInLeft fast card-light">
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <template v-for="payment in payments">
              <tr @click="$emit('setId', payment.id )">
                <td class="btn-group">
                  <i :class="'fab fa-2x fa-cc-'+payment.type"></i>
                </td>
                <td>xxxx - xxxxxx - {{payment.cc.substr(payment.cc.length - 5)}}</td>
              </tr>
            </template>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'paymentList',
  data() {
    return {
      payments: []
    }
  },
  created() {
    axios.get('/account/cc')
      .then(({
        data
      }) => this.setList(data));
  },
  methods: {
    setList: function(d) {
      this.payments = d;
      this.$store.commit('setList', {
        name: 'payments',
        data: d
      });
    }
  }
}
</script>
