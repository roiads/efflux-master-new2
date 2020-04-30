<template>
  <b-card no-body>
    <b-table
      responsive
      selectable
      select-mode="single"
      striped
      hover
      :items="items"
      :fields="fields"
      :tbody-tr-class="rowClass"
      @row-selected="$emit('set-domain', $event)"
      primary-key="id"
    ></b-table>
  </b-card>
</template>

<script>
export default {
  name: "assets-domain-list",
  props: ["domain"],
  data() {
    return {
      fields: [
        { key: "id", label: "Domain Name" },
        "id",
        "type",
        { key: "name", label: "Domain Name" },
        "repository"
      ],
      items: []
    };
  },
  mounted() {
    this.getDomainList();
  },
  methods: {
    getDomainList() {
      axios.get(`/api/assets/domain`).then(({ data }) => (this.items = data));
    },
    setDomain(domain) {
      this.domain = domain;
    },
    rowClass(item, type) {
      if (!item || type !== "row") return "table-warning";
      if (item.status === 1) return "table-success";
      if (item.status == -1) return "table-gray";
    }
  }
};
</script>
