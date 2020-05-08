<template>
  <div>
    <page-header :crumbs="crumbs">
      <!-- PAGE TOOLBAR DISPLAYS HERE -->
    </page-header>
    <page-body>
      <!-- PAGE COMPONENTS DISPLAYS HERE -->
    </page-body>
  </div>
</template>
<script>
export default {
  name: "tracker-page",
  data: () => ({
    crumbs: [["tracker", "/"]]
  }),
  mounted() {},
  methods: {}
};
</script>