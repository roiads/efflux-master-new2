<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <xList @domainOverview="domainOverview"></xList>
          <xOverview :id="id"></xOverview>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import xAdd from './domains/add'
import xOverview from './domains/overview'
import xList from './domains/list'
import xTable from './domains/table'
import xSubs from './domains/subdomains'
export default {
  name: 'domains',
  components: {
    xList,
    xTable,
    xOverview,
    xAdd,
    xSubs
  },
  data() {
    return {
      id: 0,
      items: [],
      form: new Form({
        'name': ''
      })
    }
  },
  mounted() {
    var q = this.$route.params.pathMatch;
    this.id = q.replace(/^\/|\/$/g, '');
  },
  methods: {
    setDomainID(id) {
      this.id = id;
    },
    domainOverview(id) {
      this.setDomainID(id);
    }
  }
}
</script>
