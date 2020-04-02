<template>
  <div class="col-md-4">
    <div class="card animated fadeInUp fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title mb-0">Profiles</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#account_add">
            <i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-hover ">
          <thead>
          <tr>
            <th class="d-none">ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
          </tr>
          </thead>
          <tbody>
          <tr v-for="profile in profiles.data">
            <td class="d-none" name="id">{{profile.id}}</td>
            <td>{{profile.firstname}}</td>
          </tr>
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
  name: 'profilesTable',
    data() {
      return {
        profiles: {
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
      this.getProfiles();
    },
    components: {
        VuePagination,
    },
    methods: {
      getProfiles() {
        axios.get(`/account/profile?page=${this.profiles.current_page}`)
          .then(({data}) => this.profiles = data);
      }
    }
  }
</script>
