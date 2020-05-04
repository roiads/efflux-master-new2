<template>
  <div>
    <page-header page="entourage" />

    <section>
      <div class="container-fluid">
        <entourage-profile-list v-if="!profile.id" @set-profile="setProfile"></entourage-profile-list>
        <entourage-profile-show v-if="profile.id" @set-profile="setProfile"></entourage-profile-show>
      </div>
      <b-modal
        no-stacking
        id="entourage-profile-edit"
        size="lg"
        :title="'Edit '+profile.firstname+' '+profile.lastname"
      >
        <entourage-profile-edit :id="profile.id"></entourage-profile-edit>
      </b-modal>
      <b-modal no-stacking id="entourage-profile-create" size="lg" title="New Domain">
        <entourage-profile-create></entourage-profile-create>
      </b-modal>
    </section>
  </div>
</template>
<script>
export default {
  name: "entourage-page",
  props: [],
  data() {
    return {
      profiles: [],
      profile: {},
      accounts: [],
      account: {},
      types: [],
      type: {}
    };
  },
  mounted() {},
  methods: {
    setProfile(profile) {
      this.profile = profile[0] ?? profile;
    },
    setAccount(account) {
      this.profile = profile[0] ?? profile;
    },
    editProfile() {
      this.$bvModal.show("entourage-profile-edit");
    },
    createAccount() {
      this.$bvModal.show("entourage-account-create");
    },
    createProfile() {
      this.$bvModal.show("entourage-profile-create");
    },
    closeProfile() {
      this.domain = "";
    }
  },
  computed: {}
};
</script>
<style>
</style>
