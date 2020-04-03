<template>
  <div class="col-md-4 col-lg-3">
    <div class="card animated fadeIn fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title">Accounts</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <tr v-for="account in accounts.data">
              <td @click="$emit('accountOverview', account.id )">{{account.type}} - {{account.username}}</td>
            </tr>
          </tbody>
        </table>
        <vue-pagination :pagination="accounts"
          @paginate="getAccounts()"
          :offset="4">
        </vue-pagination>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
  name: 'accountsList',
    data() {
      return {
        accounts: [],
        account:[]
      }
    },
    created() {
      axios.get('/account')
        .then(({data}) => this.accounts = data);
    },
    mounted() {
    }
  }
</script>
