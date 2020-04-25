<template>
  <div>
    <h1>TEST</h1>
    <div v-if="domain">
      <b-table :items="domain"></b-table>
    </div>
  </div>
</template>
<script>
export default {
  name: "assets-domain-show",
  props: ["domain"],
  data() {
    return {
      item: {}
    };
  },
  computed: {},
  methods: {
    getItem() {
      axios
        .get(`/api/assets/domain/${this.domain}`)
        .then(({ data }) => (this.item = data));
    }
  },
  mounted() {},
  created() {}
};
</script>
<style scoped>
</style>