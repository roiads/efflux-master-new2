<template>
  <div>
    <page-header :crumbs="crumbs" :tools="tools"></page-header>

    <b-container tag="section" fluid>
      <b-card no-body>
        <reporting-system1-chart style="position: relative; height:35vh;" />
      </b-card>

      <reporting-system1-table type="domain" />
      <reporting-system1-table type="date" />
    </b-container>
  </div>
</template>
<script>
export default {
  name: "tracker-page",
  data: () => ({
    crumbs: [["tracker", "/"], ["system1"]],
    tools: [
      {
        title: "Run API Now...",
        variant: "warning",
        href: "/api/system1/summary"
      },
      {
        title: "Week",
        variant: "success"
      },
      {
        title: "2 Weeks",
        variant: "success"
      },
      {
        title: "Month",
        variant: "success"
      }
    ]
  }),
  mounted() {},
  methods: {}
};
</script>