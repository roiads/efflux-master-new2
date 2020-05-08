<template>
  <a-table header="User List" :items="userList" @rowClick="selectUser"></a-table>
</template>
<script>
export default {
  name: "user-index",
  props: ["users"],
  data: () => ({}),
  mounted() {},
  computed: {
    userList() {
      return this.users ?? [];
    }
  },
  components: {},
  methods: {
    selectUser() {
      alert("clicked");
    }
  }
};
</script>