<template>
  <div class="col-md-8 col-lg-9" id="campaign-overview">
    <div class="card animated fadeInUp fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title mb-0" v-html="domain.name"></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#domain_add"><i class="fas fa-plus"></i></button>
        </div>
      </div>
      <div class="card-body">

        <div id="container"></div>

      </div>
    </div>
  </div>
</template>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/annotations.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
export default {
  props: ['id'],
  data() {
    return {
      domain: {
        name: '<div class="alert alert-warning m-0">Select a Domain Name</div>'
      }
    }
  },
  created() {
    
  },
  watch: { 
    id: function(newVal, oldVal) { // watch it
      this.getDomain();
    }
  },
  methods: {
    getDomain() {
      axios.get('/domain/'+this.id)
        .then(({data}) => this.domain = data);
    }
  }
}
</script>
<style scoped>
  #container, .highcharts-data-table table {
      min-width: 350px; 
      max-width: 800px;
      margin: 1em auto;
  }
  #container {
      height: 450px;
  }
  .highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
  }
  .highcharts-data-table caption {
      padding: 1em 0;
      font-size: 1.2em;
      color: #555;
  }
  .highcharts-data-table th {
    font-weight: 600;
      padding: 0.5em;
  }
  .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
      padding: 0.5em;
  }
  .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
      background: #f8f8f8;
  }
  .highcharts-data-table tr:hover {
      background: #f1f7ff;
  }
</style>