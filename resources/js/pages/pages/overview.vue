<template>
  <div class="col-md-8 col-lg-9" id="page-overview">
    <div class="card animated fadeInUp fast card-light" v-if="page.name">
      <div class="card-header py-2">
        <h3 class="card-title mb-0" v-html="page.name"></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#domain_add"><i class="fas fa-plus"></i></button>
        </div>
      </div>
      <div class="card-body">
        <div class="raw-html">
          <pre>
            &lt;template&gt;
              {{ page.html }}
            &lt;/template&gt;
          </pre>
        </div>
        <div class="raw-js">
          <pre>
            &lt;script&gt;
              {{ page.js }}
            &lt;/script&gt;
          </pre>
        </div>
        <div class="raw-css">
          <pre>
            &lt;style scoped&gt;
              {{ page.css }}
            &lt;/style&gt;
          </pre>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ['id'],
  data() {
    return {
      page: {}
    }
  },
  created() {

  },
  watch: {
    id: function(newVal, oldVal) { // watch it
      this.getPage();
    }
  },
  methods: {
    getPage() {
      axios.get('/page/' + this.id)
        .then(({
          data
        }) => this.$emit('setObj', (this.page = data)));
    }
  }
}
</script>
