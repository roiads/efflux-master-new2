<template>
  <div class="col-md-8 col-lg-9" id="domain-overview">
    <div class="card animated fadeInUp fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title mb-0" v-html="domain.name"></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#domain_add"><i class="fas fa-plus"></i></button>
        </div>
      </div>
      <div class="card-body">
        <div class="jumbotron" v-html="domain.name"></div>
      </div>
    </div>
  </div>
</template>
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
