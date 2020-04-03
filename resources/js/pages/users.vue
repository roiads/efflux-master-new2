<template>
  <div>
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <crumbs page="users" :name="user.name"></crumbs>
            <tbar :id="user.id" @xAdd="modal = 'add'" @xEdit="modal = 'edit'" @unsetId="unsetId"></tbar>
          </div>
          <h1>Admin - Users Controller</h1>
        </div>
        <div class="row">
          <xList @setId="setId"></xList>
          <xOverview :id="id" @setObj="setObj"></xOverview>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import xAdd from './users/add'
import xOverview from './users/overview'
import xList from './users/list'

export default {
  name: 'users',
  components: {
    xList,
    xAdd,
    xOverview
  },
  data() {
    return {
      id: 0,
      user: [],
      users: [],
      form: new Form({
        'name': '',
        'email': '',
        'password': '',
        'password_confirmation': ''
      })
    }
  },
  created() {
    axios.get('/user')
      .then(r => this.users = r);
  },
  methods: {
    onSubmit() {
      this.form.password_confirmation = this.form.password;
      this.form
        .post('/user')
        .then(data => this.users.push(data));
    },
    setId(id) {
      this.id = id;
    },
    setObj(obj) {
      this.user = obj;
      this.$store.commit('setData', {
        name: 'user',
        data: obj
      })
    },
    unsetId() {
      this.id = null;
    },
    closeModal() {
      this.modal = 0;
    }
  }
}
</script>
<style>
</style>
