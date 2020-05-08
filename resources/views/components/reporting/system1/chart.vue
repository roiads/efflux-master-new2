<template>
  <b-card no-body>
    <chart-line :chartData="chartData" :options="options" />
  </b-card>
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
  mounted() {},
  methods: {}
};
</script>