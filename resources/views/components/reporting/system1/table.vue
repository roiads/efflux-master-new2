<template>
  <b-card no-body>
    <b-table small striped hover :items="s1"></b-table>
  </b-card>
</template>
<script>
export default {
  name: "reporting-system1-table",
  data() {
    return { s1: {} };
  },
  mounted() {
    this.getData();
  },
  methods: {
    getData() {
      axios.get(`/api/reporting/system1/`).then(({ data }) => (this.s1 = data));
    }
  }
};
</script>