<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <stat-box size="col-6 col-sm-6 col-md-4 col-lg-3" bg="success" header="+$12,432" url="/admin/revenue" message="Revenue" icon="search-dollar" footer="see more..."></stat-box>
          <stat-box size="col-6 col-sm-6 col-md-4 col-lg-2" bg="info" :header="campaignCount" url="/admin/campaigns" message="Campaigns" icon="chart-line" footer="see more..."></stat-box>
          <stat-box size="col-6 col-sm-3 col-md-3 col-lg-2" bg="info" :header="accountCount" url="/admin/accounts" message="Accounts" icon="id-card" footer="see more..."></stat-box>
          <stat-box size="col-6 col-sm-3 col-md-3 col-lg-2" bg="info" :header="domainCount" url="/admin/domains" message="Sites" icon="network-wired" footer="see more..."></stat-box>
          <stat-box size="col-6 col-sm-3 col-md-3 col-lg-2" bg="info" :header="creativeCount" url="/admin/pages" message="Creatives" icon="newspaper" footer="see more..."></stat-box>
        </div>
        <div class="row">
          <accountList @setId="accountOverview"></accountList>
          <domainList @setId="domainOverview"></domainList>
          <campaignsTable></campaignsTable>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import accountList from './accounts/list'
import campaignsTable from './campaigns/table'
import domainList from './domains/list'

export default {
  name: 'dashboard',
  components: {
    campaignsTable,
    accountList,
    domainList
  },
  data() {
    return {
      accountCount: 0,
      domainCount: 0,
      creativeCount: 0,
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
    axios.get('/account')
      .then(({
        data
      }) => this.accountCount = data.length);
    axios.get('/content/post')
      .then(({
        data
      }) => this.creativeCount = data.length);
  },
  methods: {
    domainOverview(id) {
      this.$router.push('/domains/' + id);
    },
    accountOverview() {
      this.$router.push('/accounts/' + id);
    }
  }
}
</script>
