<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <crumbs page="domains" :name="domain.name"></crumbs>
            <tbar :id="domain.id"></tbar>
          </div>
          <h1>Domain Manager</h1>
        </div>
        <div class="row">
          <xList @setId="setId"></xList>
          <xOview :id="id" @setObj="setObj"></xOview>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import xOview from './domains/overview'
import xList from './domains/list'
import xTable from './domains/table'

export default {
  name: 'domains',
  components: {
    xList,
    xTable,
    xOview
  },
  data() {
    return {
      id: 0,
      domain: [],
      domains: [],
      form: new Form({
        'name': '',
        'registrar_id': 0,
        'notes': '...'
      })
    }
  },
  mounted() {
    var q = this.$route.params.pathMatch;
    this.id = q.replace(/^\/|\/$/g, '');
  },
  methods: {
    setId(id) {
      this.id = id;
    },
    setObj(obj) {
      this.domain = obj;
    }
  }
}
</script>
