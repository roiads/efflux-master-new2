<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <stat-box bg="success" :header="campaignCount" url="/admin/campaigns" message="Total Active Campaigns" icon="chart-line" footer="see more..."></stat-box>
          <stat-box bg="warning" :header="domainCount" url="/admin/domains" message="Domains &amp; Sub-Domains" icon="network-wired" footer="see more..."></stat-box>
          <stat-box bg="warning" :header="pageCount" url="/admin/pages" message="Total combined pages/posts" icon="newspaper" footer="see more..."></stat-box>
          <stat-box bg="danger" :header="alertCount" url="/admin/alerts" message="Recent Notifications &amp; alerts" icon="exclamation-triangle" footer="see more..."></stat-box>
        </div>
        <div class="row">
          <domainList @domainOverview="domainOverview"></domainList>
          <campaignsTable></campaignsTable>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import campaignsTable from './campaigns/table'
import domainList from './domains/list'

export default {
  name: 'dashboard',
  components: {
    campaignsTable,
    domainList
  },
  data() {
    return {
      domainCount: 0,
      pageCount: 0,
      alertCount: 0,
      campaignCount: 0,
    }
  },
  mounted() {

  },
  created() {
    axios.get('/domain')
      .then(({
        data
      }) => this.domainCount = data.length);
    axios.get('/page')
      .then(({
        data
      }) => this.pageCount = data.length);
  },
  methods: {

    domainOverview(id) {
      this.$router.push('/domains/' + id);
    }
  }
}
</script>
