<template>
  <div>
    <page-header :crumbs="crumbs">
      <b-btn variant="success" @click="user-create">Add User</b-btn>
      <b-btn v-if="user.id" @click="user-edit">Edit {{user.id}}</b-btn>
    </page-header>
    <page-body>
      <user-index :users="users" />
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
    getUsers() {
      axios.get(`/api/user`).then(({ data }) => (this.users = data));
    },
    getUser(id) {
      axios.get(`/api/user${id}`).then(({ data }) => (this.user = data));
    }
  }
};
</script>