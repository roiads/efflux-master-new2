<template>
  <b-form @submit.prevent="updateUser">
    <b-btn type="submit">Submit</b-btn>
  </b-form>
</template>
<script>
export default {
  name: "users-edit",
  props: {
    user: {
      type: Object,
      required: true
    }
  },
  data: () => ({}),
  methods: {
    updateUser(user) {
      alert("test");
    }
  }
};
</script>