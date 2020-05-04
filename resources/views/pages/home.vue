<template>
  <div>
    <page-header :crumbs="crumbs" :tools="tools"></page-header>
    <section>
      <b-container fluid>
        <b-card no-body>
          <reporting-system1-chart style="position: relative; height:40vh; width:80vw" />
          <reporting-system1-table />
        </b-card>
      </b-container>
    </section>
  </div>
</template>
<script>
export default {
  name: "home-page",
  data: () => ({
    crumbs: [["dashboard", "/"]],
    tools: [
      {
        title: "Today"
      },
      {
        title: "Yesterday"
      },
      {
        title: "Week"
      },
      {
        title: "Month"
      }
    ]
  }),
  mounted() {},
  methods: {}
};
</script>