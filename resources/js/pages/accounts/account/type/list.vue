<template>
  <div>
    <b-dropdown :id="name" text="Account Types" class="m-md-2">
      <b-dropdown-item v-bind:key="type.id" v-for="type in types.data">{{type.name}}</b-dropdown-item>
    </b-dropdown>
  </div>
</template>
<script>
export default {
  name: "reports",
  components: {},
  data() {
    return {
      types: {}
    };
  }
};
</script>
<style>
</style>
