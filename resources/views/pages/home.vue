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

          <b-row cols="2">
            <b-col>
              <p>Some things that are ready but need some design help...</p>

              <b-button block variant="light" to="/system1/">System1 Reports</b-button>
              <b-button
                block
                variant="light"
                to="/system1/a-snag-psoriasistreatment.zone/"
              >System1 Domain Reports</b-button>

              <b-button block variant="light" to="/site-manager/">Site Manager</b-button>
              <b-button block variant="light" to="/assets/domains/">Domain Manager</b-button>
            </b-col>
            <b-col>
              <p>Not quite ready, but need some design help!</p>
              <b-row>
                <b-button block variant="danger" to="/tracker/cloak/">Cloaker Controller</b-button>
                <b-button block variant="warning" to="/tracker/traffic/">Traffic Tracker</b-button>
                <b-button block variant="warning" to="/entourage/">Entourage Accounts Manager</b-button>
              </b-row>
            </b-col>
          </b-row>
        </b-jumbotron>
        <reporting-system1-chart style="position: relative; height:35vh; width:100%" />
        <assets-domain-list></assets-domain-list>
      </b-row>
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