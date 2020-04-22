<template>
  <div>
    <b-dropdown :id="name" text="Account Types" class="m-md-2">
      <b-dropdown-item :key="type.id" v-for="type in items.data">{{type.name}}</b-dropdown-item>
    </b-dropdown>
  </div>
</template>
<script>
export default {
  name: "accounts-type-list",
  mounted() {
    this.getItems();
  },
  methods: {
    getItems() {
      axios
        .get(`/accounts/type?page=${this.items.current_page}`)
        .then(({ data }) => (this.items = data));
    }
  },
  data() {
    return {
      perPage: 10,
      currentPage: 1,
      items: {}
    };
  }
};
</script>
<style>
</style>
