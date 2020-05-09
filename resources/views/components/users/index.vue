<template>
  <a-table header="User List" :items="userList" @rowclick="rowclick"></a-table>
</template>
<script>
export default {
  name: "users-index",
  props: ["users", "user_id"],
  data: () => ({}),
  mounted() {},
  computed: {
    userList() {
      return this.users ?? [];
    }
  },
  components: {},
  methods: {
    rowclick(id) {
      this.$emit("getUser", id);
    }
  }
};
</script>