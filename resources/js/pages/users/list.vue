<template>
  <div class="col-md-4 col-lg-3">
    <div class="card animated fadeInUp fast card-light">
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <template v-for="user in users">
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
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
      return {
        users: [],
        user: []
      }
    },
    created() {
      axios.get('/user')
        .then(({
          data
        }) => this.users = data);
    }
}
</script>
