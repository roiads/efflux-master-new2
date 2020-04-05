<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <stat-box size="col-sm-7 col-md-6 col-lg-3" bg="success" :header="revenueTotal" url="/admin/revenue"
            message="Revenue"></stat-box>
          <stat-box size="col-sm-5 col-md-5 col-lg-2" bg="info" :header="campaignCount" url="/admin/campaigns"
            message="Campaigns"></stat-box>
          <stat-box size="col-6 col-sm-4 col-md-2 col-lg-1" bg="primary" :header="accountCount" url="/admin/accounts"
            message="Accounts"></stat-box>
          <stat-box size="col-6 col-sm-4 col-md-2 col-lg-1" bg="primary" :header="domainCount" url="/admin/domains"
            message="Sites"></stat-box>
          <stat-box size="col-6 col-sm-4 col-md-2 col-lg-1" bg="primary" :header="creativeCount" url="/admin/pages"
            message="Creatives"></stat-box>
          <stat-box size="col-6 col-sm-4 col-md-2 col-lg-1" bg="primary" :header="botCount" url="/admin/bots"
            message="Bots"></stat-box>
          <stat-box size="col-sm-6 col-md-4 col-lg-2" bg="yellow" :header="alertCount" url="/admin/alerts"
            message="Alerts"></stat-box>
        </div>
        <div class="row">
          <accountTypeList @setId="accountTypeOverview"></accountTypeList>
          <domainList @setId="domainOverview"></domainList>
          <campaignsTable></campaignsTable>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
  import accountTypeList from './accounts/typeList'
  import accountList from './accounts/list'
  import campaignsTable from './campaigns/table'
  import domainList from './domains/list'

  export default {
    name: 'dashboard',
    components: {
      campaignsTable,
      accountTypeList,
      accountList,
      domainList
    },
    data() {
      return {
        botCount:0,
        alertCount: 0,
        accountCount: 0,
        domainCount: 0,
        revenueTotal: 0,
        creativeCount: 0,
        campaignCount: 0,
      }
    },
    mounted() {

    },
    created() {
      axios.get('/domain').then(({
        data
      }) => this.domainCount = data.total);
      axios.get('/account').then(({
        data
      }) => this.accountCount = data.total);
      axios.get('/content/post').then(({
        data
      }) => this.creativeCount = data.total);
    },
    methods: {
      domainOverview(id) {
        this.$router.push('/domains/' + id);
      },
      accountTypeOverview(id) {
        this.$router.push('/accounts/type/' + id);
      },
      accountOverview(id) {
        this.$router.push('/accounts/' + id);
      }
    }
  }
</script>