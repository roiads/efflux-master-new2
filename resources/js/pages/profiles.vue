<template>
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <breadcrumbs page="accounts" :name="account.name"></breadcrumbs>
        <toolbar :id="account.id">
          <accounts-type-list></accounts-type-list>
        </toolbar>
      </div>
    </div>

    <div class="row">
      <accounts-profile-list></accounts-profile-list>
    </div>
  </div>
</template>
<script>
export default {
  name: "accounts-profiles",
  components: {},
  data() {
    return {
      account: [],
      accounts: [],
      profile: [],
      profiles: {},
      types: []
    };
  },
  mounted() {},
  methods: {}
};
</script>
<style>
.row {
  flex-grow: 1;
}
.container-fluid {
  display: flex;
  flex-direction: column;
}
.content {
  display: flex;
  flex-grow: 1;
}
.content-wrapper {
  display: flex;
}
</style>
