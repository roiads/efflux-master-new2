<template>
  <b-button-toolbar class="col" style="flex-direction: row-reverse;">
    <b-button-group size="sm" class="mr-1">
      <b-button v-for="(x,i) in buttons" :key="i" v-html="x"></b-button>
    </b-button-group>
    <b-input-group size="sm">
      <b-form-input :value="search" placeholder="search"></b-form-input>
      <b-input-group-append>
        <b-button variant="primary">
          <b-icon-search />
        </b-button>
      </b-input-group-append>
    </b-input-group>
  </b-button-toolbar>
</template>

<script>
export default {
  name: "x-toolbar",
  props: ["search", "buttons"],
  data() {
    return {};
  }
};
</script>