<template>
  <div>
    <b-card header="User Overview" no-body>{{ user }}</b-card>

    <b-card header="Roles" no-body>{{ user.roles }}</b-card>
  </div>
</template>
<script>
export default {
  name: "users-show",
  props: {
    user: {
      type: Object,
      required: true
    }
  },
  data: () => ({}),
  methods: {
    editUser() {
      alert("EDIT");
    }
  }
};
</script>
