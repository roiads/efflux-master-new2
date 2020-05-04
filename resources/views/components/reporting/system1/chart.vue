<template>
  <b-card no-body>
    <div id="s1-chart"></div>
  </b-card>
</template>
<script>
import { Bar } from "vue-chartjs";
export default {
  extends: Bar,
  name: "reporting-system1-chart",
  data() {
    return { chart: {}, options: {} };
  },
  mounted() {
    this.getData();
    this.renderChart(this.chart, this.options);
  },
  methods: {
    getData() {
      axios.get(`/chart/system1/`).then(({ data }) => (this.chart = data));
    }
  }
};
</script>