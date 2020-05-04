<template>
  <b-card no-body>
    <b-table small striped hover :items="system1Data"></b-table>
  </b-card>
</template>
<script>
export default {
  name: "reporting-system1",
  data() {
    return { system1Data: {} };
  },
  mounted() {
    this.getData();
  },
  methods: {
    getData() {
      axios
        .get(`/api/reporting/system1/`)
        .then(({ data }) => (this.system1Data = data));
    }
  }
};
</script>