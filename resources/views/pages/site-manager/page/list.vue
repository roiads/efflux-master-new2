<template>
  <b-card header="Domain Names" no-body>
    <b-table striped hover @row-clicked="showPage" :items="pages" :fields="fields"></b-table>

    <table class="table table-striped">
      <tbody>
        <template v-for="item in domain.pages">
          <tr v-if="route.page_id" :key="item.id">
            <td>{{ route.uri }}</td>
            <td>
              <b-button :href="'https://' + domain.name+'/'" target="_blank">
                <b-icon-eye-fill></b-icon-eye-fill>
              </b-button>
            </td>
            <td>
              <b-button @click="editPage(route.page_id)">
                <b-icon-pencil></b-icon-pencil>
              </b-button>
            </td>
          </tr>
        </template>
      </tbody>
    </table>
  </b-card>
</template>
<script>
export default {
  name: "site-page-list",
  props: ["pages", "fields"],
  mounted() {
    this.getPages();
    this.setFields();
  },
  methods: {
    setFields() {
      if (!this.fields) {
        this.fields = ["id", "title", "layout"];
      }
    },
    getPages() {
      axios
        .get(`/api/site-manager/page?page=${this.pages.current_page}`)
        .then(({ data }) => (this.pages = data));
    }
  },
  data() {
    return {
      domainForm: "create"
    };
  }
};
</script>
<style>
</style>
