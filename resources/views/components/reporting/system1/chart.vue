<template>
  <chart-line :chartData="chartData" :options="options" />
</template>
<script>
export default {
  name: "reporting-system1-chart",
  props: ["domain"],
  data: () => ({
    chartData: {},
    options: {
      hoverMode: "index",
      responsive: true,
      maintainAspectRatio: false,
      title: {
        display: true,
        text: "System1 Overview"
      },
      scales: {
        xAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: "Date"
            }
          }
        ],
        yAxes: [
          {
            type: "linear",
            display: true,
            position: "left",
            id: "counts",
            scaleLabel: {
              display: true,
              labelString: "Totals"
            }
          },
          {
            type: "linear",
            display: true,
            position: "right",
            id: "revenue",
            gridLines: {
              drawOnChartArea: false
            },
            scaleLabel: {
              display: true,
              labelString: "$"
            }
          }
        ]
      }
    }
  }),
  mounted() {
    this.getData();
  },
  methods: {
    getData() {
      let getDomain = null;
      if (this.domain) {
        getDomain = "domain=" + this.domain;
      }
      axios
        .get(`/data/system1/${getDomain}`)
        .then(({ data }) => (this.chartData = data));
    }
  }
};
</script>