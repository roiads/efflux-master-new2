<template>
  <b-card no-body>
    <b-table sticky-header="300px" responsive="lg" small striped hover :items="s1">
      <template v-slot:head(name)="data">
        <span class="text-info">{{ data.label.toUpperCase() }}</span>
      </template>
    </b-table>
  </b-card>
</template>
<script>
export default {
  name: "reporting-system1-table",
  props: ["type"],
  data() {
    return { s1: {} };
  },
  mounted() {
    this.getData();
  },
  computed: {},
  methods: {
    getData() {
      axios
        .get(`/api/reporting/system1/table/${this.type}`)
        .then(({ data }) => (this.s1 = data));
    }
  }
};
</script>
<style lang="scss">
table.table {
  tr {
    td,
    th {
      font-size: 12px;
      white-space: nowrap;
    }
  }
}
</style>