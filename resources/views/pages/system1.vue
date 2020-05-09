<template>
  <div>
    <page-header :crumbs="crumbs">
      <b-btn icon="arrow-bar-down" event="fetchReports">Update Reports Now</b-btn>
      <b-button @click="fetchReports()" variant="warning">
        <b-icon-arrow-bar-down />Update Reports Now
      </b-button>
    </page-header>

    <b-container tag="section" fluid>
      <reporting-system1-chart :chartData="chart.data" />
      <reporting-system1-table v-if="table.domain" :table="table.domain" />
      <reporting-system1-table v-if="table.date" :table="table.date" />
    </b-container>
  </div>
</template>
<script>
export default {
  name: "system1-page",
  data: () => ({
    crumbs: [["tracker", "/"], ["system1"]],
    table: {
      date: [],
      domain: []
    },
    chart: {}
  }),
  mounted() {
    this.getTableDomain();
    this.getTableDate();
    this.getChartData();
  },
  methods: {
    fetchReports() {
      this.fetchReort("summary");
      this.fetchReort("campaign");
      this.fetchReort("subid");
      this.getTableDomain();
      this.getTableDate();
      this.getChartData();
    },
    fetchReport(type) {
      axios.get(`/api/system1/${type}`);
    },
    getTableDate() {
      axios
        .get(`/api/reporting/system1/table/date`)
        .then(({ data }) => (this.table.date = data));
    },
    getTableDomain() {
      axios
        .get(`/api/reporting/system1/table/domain`)
        .then(({ data }) => (this.table.domain = data));
    },
    getChartData(domain = "") {
      axios
        .get(`/data/system1/${domain}`)
        .then(({ data }) => (this.chart.data = data));
    }
  }
};
</script>