<template>
  <div>
    <b-form>EDIT DOMAIN FORM</b-form>
  </div>
</template>
<script>
export default {
  name: "assets-domain-edit",
  props: ["domain"],
  data() {
    return {};
  },
  mounted() {
    if (!this.domain.id) {
      this.getDomain(this.domain);
    }
  },
  methods: {
    getDomain(domain) {
      axios
        .get(`/api/assets/domain/${domain}`)
        .then(({ data }) => (this.domain = data));
    }
  }
};
</script>