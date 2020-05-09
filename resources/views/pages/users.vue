<template>
  <div>
    <page-header :crumbs="crumbs">
      <b-btn variant="success" @click="addUser">Add User</b-btn>
      <b-btn-toolbar v-if="user.id" class="ml-2">
        <b-btn-group>
          <b-btn @click="editUser" variant="primary">Edit</b-btn>
          <b-btn @click="user=[]" variant="primary">Close</b-btn>
          <b-btn @click="deleteUser(user.id)" variant="danger">Delete</b-btn>
        </b-btn-group>
      </b-btn-toolbar>
    </page-header>
    <page-body>
      <users-index v-if="!this.user.id" @getUser="getUser" :users="users" />
      <users-show v-if="this.user.id" :user="user" />
      <a-modal id="add-user-modal" title="Add New User">
        <users-create @add-success="addSuccess"></users-create>
      </a-modal>
      <a-modal id="edit-user-modal" title="Edit User">
        <users-edit @add-success="addSuccess"></users-edit>
      </a-modal>
    </page-body>
  </div>
</template>

<script>
export default {
  name: "users-page",
  data: () => ({
    crumbs: [["user manager", "/users"]],
    users: [],
    user: []
  }),
  mounted() {
    this.getUsers();
  },
  methods: {
    deleteUser(id) {
      axios.delete(`/api/users/user/${id}`).then(function(data) {
        console.log(data);
      });
      this.unsetUser();
      this.getUsers();
    },
    unsetUser() {
      this.user = [];
    },
    getUsers() {
      axios.get(`/api/users/user`).then(({ data }) => (this.users = data));
    },
    getUser(id) {
      axios.get(`/api/users/user/${id}`).then(({ data }) => (this.user = data));
    },
    addUser() {
      this.$bvModal.show("add-user-modal");
    },
    editUser() {
      this.$bvModal.show("edit-user-modal");
    },
    addSuccess() {
      this.$bvModal.hide("add-user-modal");
      this.getUsers();
    },
    editSuccess() {
      this.$bvModal.hide("edit-user-modal");
      this.getUser(this.user.id);
      this.getUsers();
    }
  }
};
</script>