<template>
  <div>
    <b-table :items="system1"></b-table>
  </div>
</template>
<script>
export default {
  name: "tracking-system1",
  props: ["items"],
  data() {
    return {
      system1: {}
    };
  },
  created() {
    axios.get("/api/system1").then(({ data }) => (this.system1 = data));
  }
};
</script>