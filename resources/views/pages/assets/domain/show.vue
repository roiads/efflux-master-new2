<template>
  <div class="container-fluid">
    <div class="col-md-12">
      <div v-if="domain">
          <div>
          <b-card no-body>
            <b-tabs pills card>
              <b-tab title="Posts" active>
                <b-card-text>
                  <div style="float:right;">
                    <b-button :to="{ path: '/addpost/sevenbars.com/'}">Add Post</b-button>
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
                        <tr  v-for="post in posts.data" :key="post.id">
                          <th>{{ post.id }}</th>
                          <td>{{ post.title }}</td>
                          <td><a :href="'https://' + domain" target="_blank">{{domain}}</a></td>
                          <td><a :href="'/editpost/' + post.id"><i class="fa fa-pencil"></i> Edit</a></td>
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
                  <b-table  striped hover :items="itemspages">
                    <template v-slot:cell(actions)="data">
                      <span v-html="data.value"></span>
                    </template>
                  </b-table>
                </b-card-text>
              </b-tab>
            </b-tabs>
          </b-card>
        </div>

      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "assets-domain-show",
  props: ["domain"],
  data() {
    return {
      posts: [],
    
        itemspages: [
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
        ]
    };
  },
  computed: {},
  methods: {
    getPosts() {
      axios
        .get(`/api/site-manager/post`)
        .then(({ data }) => ( this.posts = data ));
    }
  },
  mounted() {
    this.getPosts();
  },
  created() {}
};
</script>
<style scoped>
</style>