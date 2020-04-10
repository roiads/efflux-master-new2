<template>
  <div class="container-fluid">
    <div>
      <b-card-group deck>
        <b-card bg-variant="success" style="text-center" class="m-2">Revenue</b-card>
        <b-card bg-variant="info" style="text-center" class="m-2">Accounts {{topStats.account}}</b-card>
        <b-card bg-variant="primary" style="text-center" class="m-2">Domains {{topStats.domain}}</b-card>
        <b-card bg-variant="warning" style="text-center" class="m-2">Posts {{topStats.creative}}</b-card>
      </b-card-group>

      <b-card-group deck></b-card-group>
    </div>
  </div>
</template>
<script>
export default {
  name: "dashboard",
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
      .get("/content/domain")
      .then(({ data }) => (this.topStats.domain = data.total));
    axios
      .get("/accounts/account")
      .then(({ data }) => (this.topStats.account = data.total));
    axios
      .get("/content/post")
      .then(({ data }) => (this.topStats.creative = data.total));
  },
  methods: {
    domainOverview(id) {
      this.$router.push("/content/domains/" + id);
    },
    accountTypeOverview(id) {
      this.$router.push("/accounts/type/" + id);
    },
    accountOverview(id) {
      this.$router.push("/accounts/" + id);
    }
  }
};
</script>