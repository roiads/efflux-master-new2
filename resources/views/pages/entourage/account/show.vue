<template>
  <div>
    <b-card title="Profiles" tag="profile list" style="max-width: 20rem;" class="mb-2">
      <b-jumbotron>
        <template v-slot:header>Account Name</template>

        <template v-slot:lead>show some details</template>

        <hr class="my-4" />
        <b-list-group>
          <b-list-group-item>Some Recent Acction</b-list-group-item>
          <b-list-group-item>Some Recent Acction</b-list-group-item>
          <b-list-group-item>Some Recent Acction</b-list-group-item>
        </b-list-group>
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
  name: "entourage-account-show",
  components: {},
  data() {
    return {};
  }
};
</script>
<style>
</style>
