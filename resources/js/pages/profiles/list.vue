<template>
  <div class="col-md-4 col-lg-3">
    <div class="card animated fadeInUp fast card-light">
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <template v-for="profile in profiles">
              <tr>
                <td @click="$emit('setId', profile.id )" v-html="">{{profile.firstname}} {{profile.lastname}}</td>
                <td class="btn-group">
                  <button class="btn" data-toggle="modal" data-target="#mdl-accounts">
                    <i class="fa fa-network-wired"></i>
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
  name: 'profileList',
  data() {
    return {
      profiles: []
    }
  },
  created() {
    axios.get('/account/profile')
      .then(({
        data
      }) => this.setList(data))
  },
  methods: {
    setList: function(d) {
      this.profiles = d;
      this.$store.commit('setList', {
        name: 'profiles',
        data: d
      });
    }
  }
}
</script>
