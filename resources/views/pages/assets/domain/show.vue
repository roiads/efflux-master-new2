<template>
  <div class="container-fluid">
    <b-card no-body>
      <b-tabs pills card>
        <b-tab title="Posts" active>
          <b-card-text>
            <div style="float:right;">
              <b-button @click="createPost()">Add Post</b-button>
            </div>
            <div class="clearfix"></div>
            <div class="divide20"></div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Post ID</th>
                  <th>Title</th>
                  <th>URL</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="post in posts.data" :key="post.id">
                  <th>{{ post.id }}</th>
                  <td>{{ post.title }}</td>
                  <td>
                    <b-button :href="'https://' + domain+'/'" target="_blank">
                      <b-icon-eye-fill></b-icon-eye-fill>
                    </b-button>
                  </td>
                  <td>
                    <b-button @click="editPost(post.id)">
                      <b-icon-pencil></b-icon-pencil>
                    </b-button>
                  </td>
                </tr>
              </tbody>
            </table>
          </b-card-text>
        </b-tab>
        <b-tab title="Pages">
          <b-card-text>
            <div class="pull-right">
              <b-button>Add Page</b-button>
            </div>
            <div class="clearfix"></div>
            <div class="divide20"></div>
            <b-table striped hover :items="itemspages">
              <template v-slot:cell(actions)="data">
                <span v-html="data.value"></span>
              </template>
            </b-table>
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
      posts: []
    };
  },
  mounted() {
    this.getPosts(this.domain);
  },
  methods: {
    createPost() {
      this.$emit("create-post", 1);
    },
    editPost(id) {
      this.$emit("edit-post", id);
    },
    getPosts(domain) {
      alert(domain);
      axios
        .get(`/api/assets/domain/${domain}`)
        .then(({ data }) => (this.posts = data.posts));
    }
  }
};
</script>
<style scoped>
</style>