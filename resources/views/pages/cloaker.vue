<template>
  <div>
    <page-header :crumbs="crumbs" :tools="tools"></page-header>

    <b-container tag="section" fluid>
      <b-alert variant="warning" show>Landing page Cloaker... Coming Soon!</b-alert>
      <div>
        <b-alert show variant="primary">Primary Alert</b-alert>
        <b-alert show variant="secondary">Secondary Alert</b-alert>
        <b-alert show variant="success">Success Alert</b-alert>
        <b-alert show variant="danger">Danger Alert</b-alert>
        <b-alert show variant="warning">Warning Alert</b-alert>
        <b-alert show variant="info">Info Alert</b-alert>
        <b-alert show variant="light">Light Alert</b-alert>
        <b-alert show variant="dark">Dark Alert</b-alert>
      </div>
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