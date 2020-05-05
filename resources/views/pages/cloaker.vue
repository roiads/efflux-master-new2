<template>
  <div>
    <page-header :crumbs="crumbs" :tools="tools"></page-header>

    <b-container tag="section" fluid>
      <b-card no-body>
        <b-alert variant="danger">Coming Soon!</b-alert>
      </b-card>

      <reporting-system1-table type="domain" />
      <reporting-system1-table type="date" />
    </b-container>
  </div>
</template>
<script>
export default {
  name: "cloacker-page",
  data: () => ({
    crumbs: [["tracker", "tracker"], ["Cloak Controller"]],
    tools: [
      {
        title: "blacklist",
        variant: "danger"
      },
      {
        title: "Actively Cloaked Cmapgins",
        variant: "success"
      }
    ]
  }),
  mounted() {},
  methods: {}
};
</script>