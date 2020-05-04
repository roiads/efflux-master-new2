<template>
  <div>
    <page-header :crumbs="crumbs" :tools="tools"></page-header>
    <section>
      <reporting-system1-table />
      <reporting-system1-chart />
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