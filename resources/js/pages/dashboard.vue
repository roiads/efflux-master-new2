<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <b-card border-variant="success" align="center">
          <b-card-text>Revenue</b-card-text>
          <b-card-text>Spend</b-card-text>
          <b-card-text>Total</b-card-text>
        </b-card>
      </div>
      <div class="row">
        <accountTypeList @setId="accountTypeOverview"></accountTypeList>
        <domainList @setId="domainOverview"></domainList>
      </div>
    </div>
  </section>
</template>
<script>
import accountTypeList from "./accounts/account/type/list";
import accountList from "./accounts/account/list";
import domainList from "./content/domain/list";

export default {
  name: "dashboard",
  components: {
    accountTypeList,
    accountList,
    domainList
  },
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
      .then(({ data }) => (this.totStats.domain = data.total));
    axios
      .get("/account")
      .then(({ data }) => (this.topStats.account = data.total));
    axios
      .get("/post")
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