<template>
  <b-row>
    <b-col>
      <b-breadcrumb :items="breadcrumbs" class="py-1"></b-breadcrumb>
    </b-col>
    <b-col>
      <b-btn-group size="sm" class="float-right">
        <b-button v-for="(tool,i) in tools" :variant="tool.variant" :key="i">{{ tool.title }}</b-button>
      </b-btn-group>
    </b-col>
  </b-row>
</template>
<script>
export default {
  name: "page-header",
  props: ["crumbs", "tools"],
  computed: {},
  data: () => ({
    breadcrumbs: []
  }),
  methods: {
    makeBreadcrumbs() {
      this.addBreadcrumb(["home", "/"]);
      this.crumbs.forEach(crumb => {
        this.addBreadcrumb(crumb);
      });
    },
    addBreadcrumb(crumb) {
      let breadcrumb = {};
      if (typeof crumb === "object") {
        breadcrumb.text = crumb.title ?? crumb[0];
        if (crumb.to || crumb[1] == "to") {
          breadcrumb.to = crumb.to ?? crumb[1][1];
        } else {
          breadcrumb.href =
            crumb.href ?? typeof crumb[1] === "object" ? crumb[1][1] : crumb[1];
        }
      } else {
        breadcrumb.text = crumb;
      }
      this.breadcrumbs.push(breadcrumb);
    }
  },
  mounted() {
    this.makeBreadcrumbs();
    this.makeToolbar();
  }
};
</script>
<style scoped>
li.breadcrumb-item {
  text-transform: capitalize;
}
</style>