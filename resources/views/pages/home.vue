<template>
  <div>
    <page-header :crumbs="crumbs" :tools="tools"></page-header>
    <b-container tag="section" fluid>
      <b-row>
        <b-jumbotron bg-variant="info" text-variant="white" border-variant="dark">
          <template v-slot:header>Welcome Back!</template>

          <template v-slot:lead>
            <b>Please don't mind the mess...</b>
          </template>

          <hr class="my-4" />

          <p>Some things that are ready but need some design help...</p>

          <b-row>
            <b-button block variant="success" to="/tracker/system1/">System1 Reports</b-button>
            <b-button
              block
              variant="success"
              to="/tracker/system1/a-snag-psoriasistreatment.zone/"
            >System1 Domain Reports</b-button>

            <b-button block variant="success" to="/site-manager/">Site Manager</b-button>
          </b-row>

          <p>Not quite ready, but need some design help!</p>
          <b-row>
            <b-button block variant="warning" to="/tracker/cloak/">Cloaker Controller</b-button>
            <b-button block variant="warning" to="/tracker/traffic/">Traffic Tracker</b-button>
            <b-button block variant="warning" to="/entourage/">Entourage Accounts Manager</b-button>
          </b-row>
        </b-jumbotron>
      </b-row>
      <b-card no-body>
        <reporting-system1-chart style="position: relative; height:35vh;" />
      </b-card>
    </b-container>
  </div>
</template>
<script>
export default {
  name: "home-page",
  data: () => ({
    crumbs: [["dashboard", "/"]]
  }),
  mounted() {},
  methods: {}
};
</script>