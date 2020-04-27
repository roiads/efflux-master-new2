<template>
  <div>
    <b-form></b-form>
  </div>
</template>
<script>
import { required, minLength, between } from "vuelidate/lib/validators";
export default {
  name: "assets-domain-edit",
  props: ["id"],
  data() {
    return {
      submitStatus: null,
      domain: {}
    };
  },
  mounted() {
    this.getDomain();
  },
  validations: {
    domain: {
      name: {
        required,
        minLength: minLength(4)
      }
    },
    age: {
      between: between(20, 30)
    }
  },
  methods: {
    getDomain() {
      axios
        .get(`/api/assets/domain/${this.id}`)
        .then(({ data }) => (this.domain = data));
    }
  }
};
</script>