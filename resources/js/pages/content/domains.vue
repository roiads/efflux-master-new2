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
    <modal v-if="modal" @closeModal="closeModal">
      <xAdd v-if="modal  == 'add'">test</xAdd>
      <xEdit :id="id" v-if="modal  == 'edit'"></xEdit>
    </modal>
  </section>
</template>
<script>
import xOview from "./domain/overview";
import xList from "./domain/list";

export default {
  name: "domains",
  components: {
    xList,
    xOview
  },
  data() {
    return {
      id: 0,
      modal: 0,
      domain: [],
      domains: [],
      form: new Form({
        name: "",
        registrar_id: 0,
        notes: "..."
      })
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
