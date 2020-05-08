<template>
  <b-card :header="header" no-body>
    <b-form-group label="Table Options" label-cols-lg="2" v-show="tableOptions">
      <b-form-checkbox v-model="hover" inline>Hover</b-form-checkbox>
      <b-form-checkbox v-model="striped" inline>Striped</b-form-checkbox>
      <b-form-checkbox v-model="borderless" inline>Borderless</b-form-checkbox>
      <b-form-checkbox v-model="footClone" inline>Foot Clone</b-form-checkbox>
    </b-form-group>
    <b-table
      responsive
      small
      :items="items"
      :fields="fields"
      :hover="hover"
      :striped="striped"
      :borderless="borderless"
      :sticky-header="height"
      :foot-clone="footClone"
      @row-selected="$emit('rowClick', $event)"
    >
      <!-- HEADER -->
      <template v-slot:head></template>
      <!-- BODY -->
      <template v-slot:body></template>
      <!-- FOOTER -->
      <template v-slot:foot></template>
    </b-table>
  </b-card>
</template>
<script>
export default {
  name: "a-table",
  data: () => ({
    tableOptions: false
  }),
  props: {
    hover: { type: Boolean, default: true },
    striped: { type: Boolean, default: true },
    borderless: { type: Boolean, default: true },
    header: { type: String, default: null },
    footClone: { type: Boolean, default: false },
    height: { type: [String, Number], default: "500px" },
    items: { default: null },
    fields: { default: null },
    clickEvent: { type: String, default: null }
  },
  methods: {
    rowSelected() {
      alert("ROW CLICK");
    }
  }
};
</script>