<template>
  <b-card no-body>
    <a-table :items="table"></a-table>
  </b-card>
</template>
<script>
export default {
  name: "reporting-system1-table",
  props: ["table"],
  data: () => ({}),
  mounted() {},
  computed: {},
  methods: {}
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