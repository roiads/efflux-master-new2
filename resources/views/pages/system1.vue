<template>
  <div>
    <page-header :crumbs="crumbs">
      <b-btn icon="arrow-bar-down" event="fetchReports">Update Reports Now</b-btn>
      <b-button @click="fetchReports()" variant="warning">
        <b-icon-arrow-bar-down />Update Reports Now
      </b-button>
    </page-header>

    <b-container tag="section" fluid>
      <reporting-system1-chart :chart="chart.data" />
      <reporting-system1-table :table="table.data" />
    </b-container>
  </div>
</template>
<script>
export default {
  name: "system1-page",
  data: () => ({
    crumbs: [["tracker", "/"], ["system1"]],
    table: {
      type: "date",
      data: {}
    },
    chart: {
      domain: null,
      data: {}
    }
  }),
  mounted() {},
  methods: {
    fetchReports() {
      fetchReort("summary");
      fetchReort("campaign");
      fetchReort("subid");
      getTableData();
      getChartData();
    },
    fetchReport(type) {
      axios.get(`/api/system1/${type}`);
    },
    getTableData() {
      axios
        .get(`/api/reporting/system1/table/${this.table.type}`)
        .then(({ data }) => (this.table.data = data));
    },
    getChartData() {
      let getDomain = null;
      if (this.chart.domain) {
        getDomain = "domain=" + this.chart.domain;
      }
      axios
        .get(`/data/system1/${getDomain}`)
        .then(({ data }) => (this.chart.data = data));
    }
  }
};
</script>