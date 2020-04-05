<template>
  <div class="col-sm-4 col-lg-3">
    <div class="card animated fadeInLeft fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title">Payment Methods</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <template v-for="payment in payments.data">
              <tr @click="$emit('setId', payment.id )">
                <td class="btn-group">
                  <i :class="'fab fa-2x fa-cc-'+payment.type"></i>
                </td>
                <td>xxxx - xxxxxx - {{payment.cc.substr(payment.cc.length - 5)}}</td>
              </tr>
            </template>
          </tbody>
        </table>
        <vue-pagination :pagination="payments" @paginate="getCcs()"></vue-pagination>
      </div>
    </div>
  </div>
</template>
<script>
import VuePagination from '../../components/pagination.vue'
export default {
  name: 'paymentList',
  data() {
      return {
        payments: {total: 0,per_page: 10,from: 1,to: 0,current_page: 1},
        offset: 4,
      }
  },
  mounted() {
    this.getCcs();
  },
  methods: {
    setList: function(d) {
      this.payments = d;
      this.$store.commit('setList', {
        name: 'payments',
        data: d
      });
    },
    components: {
        VuePagination,
    },
    getCcs() {
      axios.get(`/account/cc?page=${this.payments.current_page}`)
        .then(({data}) => this.payments = data);
    }
  }
}
</script>
