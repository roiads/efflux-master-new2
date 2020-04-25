<template>
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <crumbs page="users" :name="user.name"></crumbs>
        <tbar :id="user.id" @xAdd="modal = 'add'" @xEdit="modal = 'edit'" @unsetId="unsetId"></tbar>
      </div>
      <h1>Admin - Users Controller</h1>
    </div>
    <div class="row">
      <users-list></users-list>
    </div>
  </div>
</template>
<script>
export default {
  name: "users-page",
  data() {
    return {
      id: 0,
      user: [],
      users: [],
      form: new Form({
        name: "",
        email: "",
        password: "",
        password_confirmation: ""
      })
    };
  },
  created() {
    axios.get("/user").then(r => (this.users = r));
  },
  methods: {
    onSubmit() {
      this.form.password_confirmation = this.form.password;
      this.form.post("/user").then(data => this.users.push(data));
    },
    unsetId() {
      this.id = null;
    },
    closeModal() {
      this.modal = 0;
    }
  }
};
</script>
<style>
</style>
