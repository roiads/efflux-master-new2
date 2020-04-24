<template>
  <b-table>HELLO</b-table>
</template>
<script>
export default {
  name: "assets-domain-show",
  props: ["id"],
  data() {
    return {
      item: {}
    };
  },
  mounted() {
    this.getItem();
  },
  methods: {
    getItem() {
      axios
        .get(`/api/assets/domain/${this.id}`)
        .then(({ data }) => (this.item = data));
    }
  }
};
</script>
<style scoped>
</style>