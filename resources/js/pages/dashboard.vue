<template>
  <div class="container-fluid">
    <div>
      <b-card-group deck>
        <b-card border-variant="success" style="text-center" class="m-2">
          <b-card-text>Revenue</b-card-text>
          <b-card-text>Spend</b-card-text>
          <b-card-text>Total</b-card-text>
        </b-card>
        <b-card border-variant="primary" style="text-center" class="m-2">
          <b-card-text>Campaigns</b-card-text>
          <b-card-text>Active</b-card-text>
          <b-card-text>Complete</b-card-text>
        </b-card>
        <b-card border-variant="primary" style="text-center" class="m-2">
          <b-card-text>Accounts</b-card-text>
          <b-card-text>Active</b-card-text>
          <b-card-text>Total</b-card-text>
        </b-card>
        <b-card border-variant="info" style="text-center" class="m-2">
          <b-card-text>Sites</b-card-text>
          <b-card-text>Active</b-card-text>
          <b-card-text>Total</b-card-text>
        </b-card>
      </b-card-group>
    </div>
    <div>
      <b-card-group deck>
        <b-card border-variant="info" style="text-center">
          <b-card-text>Views</b-card-text>
          <b-card-text>Clicks</b-card-text>
          <b-card-text>Leads</b-card-text>
        </b-card>
        <b-card border-variant="info" style="text-center">
          <b-card-text>Views</b-card-text>
          <b-card-text>Clicks</b-card-text>
          <b-card-text>Leads</b-card-text>
        </b-card>
        <b-card border-variant="danger" style="text-center">
          <b-card-text>Warnings</b-card-text>
          <b-card-text>Alerts</b-card-text>
          <b-card-text>Notices</b-card-text>
        </b-card>
      </b-card-group>
    </div>
    <div class="row">
      <accountTypeList @setId="accountTypeOverview"></accountTypeList>
      <domainList @setId="domainOverview"></domainList>
    </div>
  </div>
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