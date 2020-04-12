<template>
  <section class="content">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <crumbs page="domains" :name="domain.name"></crumbs>
          <tbar :id="domain.id" @xAdd="modal = 'add'" @xEdit="modal = 'edit'" @unsetId="unsetId"></tbar>
        </div>
        <h1>Site Manager</h1>
      </div>
      <div class="row">
        <xList @setId="setId"></xList>
        <xOview :id="id" @setObj="setObj"></xOview>
      </div>
    </div>
    <modal v-if="modal" @closeModal="closeModal"></modal>
  </section>
</template>
<script>
export default {
  name: "domains",
  components: {},
  data() {
    return {
      domain: [],
      domains: []
    };
  },
  mounted() {
    var q = this.$route.params.pathMatch;
    this.id = q.replace(/^\/|\/$/g, "");
  },
  methods: {
    setId(id) {
      this.id = id;
    },
    setObj(obj) {
      this.domain = obj;
    },
    unsetId() {
      this.id = null;
    },
    closeModal() {
      this.modal = 0;
    }
  }
};
</script>
