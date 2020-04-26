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
    <b-modal id="createPostForm" hide-footer title="Create New Post">
      <site-manager-post-create></site-manager-post-create>
    </b-modal>
    <b-modal id="createPageForm" hide-footer title="Create New Page">
      <site-manager-page-create></site-manager-page-create>
    </b-modal>
    <b-modal id="editPostForm" hide-footer title="Edit Post">
      <site-manager-post-edit :post="post"></site-manager-post-edit>
    </b-modal>
    <b-modal id="editPageForm" hide-footer title="Edit Page">
      <site-manager-page-edit :page="page"></site-manager-page-edit>
    </b-modal>
  </div>
</template>
<script>
export default {
  name: "assets-domain-show",
  props: ["domain"],
  data() {
    return {
      domain: {},
      post: {},
      posts: [],
      page: {},
      pages: []
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
      this.post = post;
      this.$bvModal.show("editPostForm");
    },
    createPage() {
      this.$bvModal.show("createPageForm");
    },
    editPage(page) {
      this.page = page;
      this.$bvModal.show("editPageForm");
    },
    createDomain() {
      this.$bvModal.show("createDomainForm");
    },
    editDomain(domain) {
      this.domain = domain;
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