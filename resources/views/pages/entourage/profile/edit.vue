<template>
  <div>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show"></b-form>
  </div>
</template>
<script>
import { required, minLength, between } from "vuelidate/lib/validators";
export default {
  name: "entourage-profile-edit",
  props: ["id"],
  data() {
    return {
      submitStatus: null,
      profile: {}
    };
  },
  mounted() {
    this.getProfile();
  },
  validations: {},
  methods: {
    onSubmit(evt) {
      evt.preventDefault();
      alert(JSON.stringify(this.form));
    },
    onReset(evt) {
      evt.preventDefault();
      this.profile.firstname = "";
      this.profile.lastname = "";
      this.profile.dob = null;
      this.profile.gender = [];

      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
    getProfile() {
      axios
        .get(`/api/entourage/profile/${this.id}`)
        .then(({ data }) => (this.profile = data));
    }
  }
};
</script>