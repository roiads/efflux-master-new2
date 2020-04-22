<template>
  <div>
    <div class="content-header">
      <div class="container-fluid">
        <x-breadcrumb></x-breadcrumb>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <b-card-group deck>
          <b-card
            bg-variant="success"
            style="text-center"
            class="m-2 elevation-2"
          >Revenue {{topStats.revenue}}</b-card>
          <b-card
            bg-variant="info"
            style="text-center"
            class="m-2 elevation-2"
          >Accounts {{topStats.account}}</b-card>
          <b-card
            bg-variant="primary"
            style="text-center"
            class="m-2 elevation-2"
          >Domains {{topStats.domain}}</b-card>
          <b-card
            bg-variant="warning"
            style="text-center"
            class="m-2 elevation-2"
          >Posts {{topStats.creative}}</b-card>
        </b-card-group>
      </div>
      <assets-domain-list></assets-domain-list>
    </section>
  </div>
</template>
<script>
export default {
  name: "home-page",
  components: {},
  data() {
    return {
      topStats: {
        bot: 0,
        alert: 0,
        account: 0,
        domain: 0,
        revenue: 0,
        creative: 0,
        campaign: 0
      }
    };
  },
  mounted() {},
  created() {
    axios
      .get("/assets/domain")
      .then(({ data }) => (this.topStats.domain = data.total));
    axios
      .get("/entourage/account")
      .then(({ data }) => (this.topStats.account = data.total));
    axios
      .get("/site-manager/post")
      .then(({ data }) => (this.topStats.creative = data.total));
  },
  methods: {
    domainOverview(id) {
      this.$router.push("/assets/domains/" + id);
    },
    accountTypeOverview(id) {
      this.$router.push("/entourage/type/" + id);
    },
    accountOverview(id) {
      this.$router.push("/entourage/account/" + id);
    }
  }
};
</script>