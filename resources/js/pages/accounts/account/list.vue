<template>
  <div>
    <b-card no-body header="Accounts" class="mb-2 p-0">
      <b-list-group v-for="account in items.data" :key="account.id" id="account-list">
        <b-list-group-item :to="'/accounts/account/'+account.id" v-html="account.username"></b-list-group-item>
      </b-list-group>
      <vue-pagination :pagination="items" @paginate="getAccounts()"></vue-pagination>
    </b-card>
  </div>
</template>
<script>
export default {
  name: "accounts-account-list",
  mounted() {
    this.getAccounts();
  },
  data() {
    return {
      perPage: 10,
      currentPage: 1,
      items: {}
    };
  },
  methods: {
    getAccounts() {
      axios
        .get(`/accounts/account?page=${this.items.current_page}`)
        .then(({ data }) => (this.items = data));
    }
  },
  computed: {
    rows() {
      return this.items.length;
    }
  }
};
</script>
<style>
</style>
