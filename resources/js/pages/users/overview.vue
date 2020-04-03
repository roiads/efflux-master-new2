<template>
  <div class="col-sm-8 col-lg-9" id="user-overview">
    <div class="row" v-if="user.id">
      <stat-box bg="gray" size="col-sm-11 col-md-10" :header="user.first_name+' '+user.last_name" url="#" :message="user.email" icon="user" footer="Edit Permissions..."></stat-box>
      
      <div class="col-sm-6 col-md-4">
        <div class="card animated fadeInUp fast card-light">
          <div class="card-body p-0">
            <div class="card-header py-1 px-3">
              <h3 class="card-title mb-0">Permissions:</h3>
            </div>
            <table class="table table-hover">
              <tbody>
                <tr v-for="role in user.roles">
                  <td class="flex-grow-1">{{role.name}}</td>
                  <td class="p-1">
                    <button class="btn btn-danger px-2 py-1" @click="$emit('detachRole', role.id )">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-8">
        <div class="card animated fadeInUp fast card-light">
          <div class="card-body p-0">
            <div class="card-header py-1 px-3">
              <h3 class="card-title mb-0">Activity:</h3>
            </div>
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td>Coming</td>
                  <td>Soon!</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'userOverview',
  props: ['id'],
  data() {
    return {
      user: {}
    }
  },
  watch: {
    id: function(newVal, oldVal) { // watch it
      this.getuser();
    }
  },
  methods: {
    getuser() {
      axios.get('/user/' + this.id)
        .then(({
          data
        }) => this.$emit('setObj', (this.user = data)));
    }
  }
}
</script>
