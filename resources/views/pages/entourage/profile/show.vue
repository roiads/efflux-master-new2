<template>
  <div>
    <b-card title="Profiles" tag="profile list" style="max-width: 20rem;" class="mb-2">
      <b-jumbotron>
        <template v-slot:header>Profile Name</template>

        <template v-slot:lead>show some details</template>

        <hr class="my-4" />
        <b-list-group>
          <b-list-group-item>Some Account</b-list-group-item>
          <b-list-group-item>Some Account</b-list-group-item>
          <b-list-group-item>Some Account</b-list-group-item>
          <b-list-group-item>Some Account</b-list-group-item>
          <b-list-group-item>Some Account</b-list-group-item>
        </b-list-group>

        <b-button variant="primary" href="#">Do Something</b-button>
        <b-button variant="success" href="#">Do Something Else</b-button>
      </b-jumbotron>

      <b-button variant="success">
        Add New
        <b-icon icon="plus-circle-fill"></b-icon>
      </b-button>
    </b-card>
  </div>
</template>
<script>
export default {
  name: "accounts-profile-show",
  components: {},
  data() {
    return {};
  }
};
</script>
<style>
</style>
