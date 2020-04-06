<template>
  <div class="col-sm-4 list-comp">
    <div class="card animated fadeInLeft fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title">Posts</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <tr v-bind:key="post.id" v-for="post in posts.data">
              <td @click="selectPost(post)">{{ post.title }}</td>
            </tr>
          </tbody>
        </table>
        <vue-pagination :pagination="posts" @paginate="getPosts()"></vue-pagination>
      </div>
    </div>
    <div class="card animated fadeInUp fast card-light" v-if="selectedPost.id" style="flex-grow: 1">
      <div class="container form">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" v-model="modifiedPost.title" />
        </div>
        <div class="form-group text-grow">
          <label for="description">Description</label>
          <textarea
            class="form-control"
            id="description"
            rows="3"
            v-model="modifiedPost.description"
          ></textarea>
        </div>
        <div class="form-group text-grow">
          <label for="exerpt">Exerpt</label>
          <textarea class="form-control" id="exerpt" rows="3" v-model="modifiedPost.excerpt"></textarea>
        </div>
        <div class="full-width centered">
          <button class="btn btn-primary" @click="updateCurrentPost()">Submit</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import VuePagination from "../../../components/pagination.vue";
export default {
  name: "postsList",
  data() {
    return {
      posts: {},
      selectedPost: {},
      modifiedPost: {
        title: "",
        description: "",
        excerpt: ""
      },
      offset: 4
    };
  },
  mounted() {
    this.getPosts();
  },
  components: {
    VuePagination
  },
  methods: {
    updateCurrentPost() {
      if (!this.checkIfUpdated()) {
        fetch(
          window.location.protocol +
            "//" +
            window.location.host +
            "/content/post/metadata/" +
            this.selectedPost.id,
          {
            method: "Put",
            headers: {
              "Content-Type": "Application/json"
            },
            body: JSON.stringify(this.modifiedPost)
          }
        ).then(() => {
          this.selectedPost.title = this.modifiedPost.title;
          this.selectedPost.description = this.modifiedPost.description;
          this.selectedPost.excerpt = this.modifiedPost.excerpt;
        });
      } else {
        console.log("nothing to update!");
      }
    },
    checkIfUpdated() {
      return (
        this.selectPost.title === this.modifiedPost.title &&
        this.selectPost.title === this.modifiedPost.title &&
        this.selectPost.title === this.modifiedPost.title
      );
    },
    selectPost(post) {
      this.selectedPost = post;
      this.modifiedPost = {
        title: post.title,
        description: post.description,
        excerpt: post.excerpt
      };
      this.$emit("setPost", post);
    },
    getPosts() {
      axios
        .get(`/content/post?page=${this.posts.current_page}`)
        .then(({ data }) => (this.posts = data));
    },
    setList: function(d) {
      this.posts = d;
      this.$store.commit("setList", {
        name: "posts",
        data: d
      });
    }
  }
};
</script>
<style>
.list-comp {
  display: flex;
  flex-direction: column;
}
.input-group > .input-group-prepend {
  flex: 0 0 20%;
}
.input-group .input-group-text {
  width: 100%;
}
.centered {
  text-align: center;
}
.form {
  padding-top: 10px;
  padding-bottom: 10px;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
}
.text-grow {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
}
textarea {
  flex-grow: 1;
}
</style>