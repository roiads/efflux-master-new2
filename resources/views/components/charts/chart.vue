
<script>
import { Bar, Line, mixins } from "vue-chartjs";
export default {
  name: "chart-line",
  mixins: [Line, Bar, mixins.reactiveProp],
  props: {
    chartdata: {
      type: Object,
      default: null
    },
    options: {
      type: Object,
      default: null
    }
  },
  watch: {
    chartData() {
      this.$data._chart.update();
    }
  },
  mounted() {
    this.renderChart(this.chartData, this.options);
  }
};
</script>