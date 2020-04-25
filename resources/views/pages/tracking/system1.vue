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
    axios
      .get(
        "https://reports.openmail.com/vv2/subid_estimated_intraday.json?auth_key=O5nGAFSEpO8spOYvmZ1a"
      )
      .then(({ data }) => (this.system1 = data));
    alert(system1);
  }
};
</script>