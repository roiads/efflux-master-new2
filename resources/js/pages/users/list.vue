<template>
  <div class="col-md-4 col-lg-3">
    <div class="card animated fadeInUp fast card-light">
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <template v-for="user in users.data">
              <tr @click="$emit('setId', user.id )">
                <td>{{user.first_name}}</td>
                <td class="btn-group">
                  <button class="btn">
                    <i class="fa fa-edit"></i>
                  </button>
                </td>
              </tr>
            </template>
          </tbody>
        </table>
        <vue-pagination :pagination="users" @paginate="getUsers()"></vue-pagination>
      </div>
    </div>
  </div>
</template>
<script>
import VuePagination from '../../components/pagination.vue'
export default {
  name: 'usersList',
  data() {
    return {
      users: {
        total: 0,
        per_page: 10,
        from: 1,
        to: 0,
        current_page: 1
      },
      user: {},
      offset: 4      
    }
  },
  mounted() {
    this.getUsers();
  },
  components: {
      VuePagination,
  },
  methods: {
    getUsers() {
      axios.get(`/user?page=${this.users.current_page}`)
        .then(({
          data
        }) => this.users = data);
    }
  }
}
</script>