<template>
  <div class="col-md-4 col-lg-3">
    <div class="card animated fadeIn fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title">Accounts</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <template v-for="accountType in accountTypes.data">
              <tr>
                <td @click="$emit('setId', accountType.id )">{{accountType.name}} <small class="text-muted">({{accountType.accounts_count}})</small></td>
              </tr>
            </template>
          </tbody>
        </table>
        <vue-pagination :pagination="accountTypes" @paginate="getAccountTypes()"></vue-pagination>
      </div>
    </div>
  </div>
</template>

<script>
import VuePagination from '../../components/pagination.vue'
  export default {
  name: 'accountsTypeList',
    data() {
      return {
        accountTypes: {
            total: 0,
            per_page: 2,
            from: 1,
            to: 0,
            current_page: 1
        },
        offset: 4,
      }
    },
    mounted() {
      this.getAccountTypes();
    },
    components: {
        VuePagination,
    },
    methods: {
      getAccountTypes() {
        axios.get(`/account/type?page=${this.accountTypes.current_page}`)
          .then(({data}) => this.accountTypes = data);
      }
    }
  }
</script>

