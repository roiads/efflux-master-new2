<template>
  <b-card header="System1 Raw DATA" no-body>
    <b-table striped hover sortable :items="system1"></b-table>
  </b-card>
</template>
<script>
export default {
  name: "reporting-system1",
  data() {
    return {
      system1: {}
    };
  },
  created() {
    axios
      .get(`/api/reporting/system1?page=${this.system1.current_page}`)
      .then(({ data }) => (this.system1 = data));
  }
};
</script>