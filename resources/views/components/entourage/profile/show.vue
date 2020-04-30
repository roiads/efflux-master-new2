<template>
  <b-card :header="profile.firstname+' ' +profile.lastname" no-body>
    <b-tabs pills>
      <b-tab title="Accounts" active>
        <entourage-account-list :id="id"></entourage-account-list>
      </b-tab>
      <b-tab title="History">
        <!-- <entourage-profile-list :pages="profile.pages"></site-page-list> -->
      </b-tab>
    </b-tabs>
  </b-card>
</template>
<script>
export default {
  name: "entourage-profile-show",
  props: ["id"],
  data() {
    return {
      profile: {}
    };
  },
  mounted() {
    this.getProfile();
  },
  computed: {},
  methods: {
    getProfile() {
      axios
        .get(`/api/entourage/profile/${this.id}`)
        .then(({ data }) => (this.profile = data));
    }
  }
};
</script>
<style scoped>
</style>