<template>
  <section class="content">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <crumbs page="accounts" :name="account.name"></crumbs>
          <tbar :id="account.id"></tbar>
        </div>
        <h1>Account Manager</h1>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  name: "accounts",
  components: {},
  data() {
    return {
      account: [],
      accounts: [],
      form: new Form({
        name: "",
        email: "",
        password: "",
        type: ""
      })
    };
  },
  created() {
    axios.get("/account").then(r => (this.accounts = r));
  },
  methods: {
    onSubmit() {
      this.form.post("/account").then(r => this.accounts.push(r));
    }
  }
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
