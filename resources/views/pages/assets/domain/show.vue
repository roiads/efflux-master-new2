<template>
  <div class="container-fluid">
    <b-card no-body>
      <b-tabs pills card>
        <b-tab title="Posts" active>
          <div style="float:right;">
            <b-button variant="success" @click="createPost()">Add Post</b-button>
          </div>
          <div class="clearfix"></div>
          <div class="divide20"></div>
          <table class="table table-striped">
            <tbody>
              <template v-for="route in domain.routes">
                <tr v-if="route.post_id" :key="route.id">
                  <td>{{ route.uri }}</td>
                  <td>
                    <b-button :href="'https://' + domain.name+'/'" target="_blank">
                      <b-icon-eye-fill></b-icon-eye-fill>
                    </b-button>
                  </td>
                  <td>
                    <b-button @click="editPost(route.post_id)">
                      <b-icon-pencil></b-icon-pencil>
                    </b-button>
                  </td>
                </tr>
              </template>
            </tbody>
          </table>
        </b-tab>
        <b-tab title="Pages">
          <b-card-text>
            <div class="pull-right">
              <b-button>Add Page</b-button>
            </div>
            <div class="clearfix"></div>
            <div class="divide20"></div>
            <table class="table table-striped">
              <tbody>
                <template v-for="route in domain.routes">
                  <tr v-if="route.page_id" :key="route.id">
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
          </b-card-text>
        </b-tab>
      </b-tabs>
    </b-card>
  </div>
</template>
<script>
export default {
  name: "assets-domain-show",
  props: ["domain"],
  data() {
    return {
      domain: {}
    };
  },
  mounted() {
    this.getDomain(this.domain);
  },
  methods: {
    createPost() {
      this.$bvModal.show("createPostForm");
    },
    editPost(post) {
      this.$bvModal.show("editPostForm");
    },
    createPage() {
      this.$bvModal.show("createPostForm");
    },
    editPage(page) {
      this.$bvModal.show("editPostForm");
    },
    createDomain() {
      this.$bvModal.show("createDomainForm");
    },
    editDomain(domain) {
      this.$bvModal.show("editDomainForm");
    },
    getDomain(domain) {
      axios
        .get(`/api/assets/domain/${domain}`)
        .then(({ data }) => (this.domain = data));
    }
  }
};
</script>
<style scoped>
</style>