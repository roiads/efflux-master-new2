<template>
  <div>
    <b-card no-body>
      <b-table
        responsive
        selectable
        select-mode="single"
        striped
        hover
        show-empty
        :items="accounts"
        :fields="fields"
        :current-page="currentPage"
        :filter="filter"
        :filterIncludedFields="filterOn"
        :sort-by.sync="sortBy"
        :sort-desc.sync="sortDesc"
        :sort-direction="sortDirection"
        @row-selected="$emit('set-account', $event)"
        primary-key="id"
      ></b-table>
    </b-card>
  </div>
</template>



<script>
export default {
  name: "entourage-account-list",
  mounted() {
    this.getAccounts();
  },
  props: ["id"],
  data() {
    return {
      accounts: {}
    };
  },
  methods: {
    getAccounts() {
      axios
        .get(
          `/api/entourage/account?profile_id=${this.id}&page=${this.accounts.current_page}`
        )
        .then(({ data }) => (this.accounts = data));
    }
  }
};
</script>
<style>
</style>
