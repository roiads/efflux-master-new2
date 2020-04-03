<template>
  <div class="col-sm-4">
    <div class="card animated fadeInLeft fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title">Posts</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <tr v-for="post in posts.data">
              <td @click="$emit('setId', post.id )">{{post.title}}</td>
            </tr>
          </tbody>
        </table>
        <vue-pagination :pagination="posts" @paginate="getPosts()"></vue-pagination>
      </div>
    </div>
  </div>
</template>
<script>
import VuePagination from '../../components/pagination.vue'
  export default {
  name: 'postsList',
    data() {
      return {
        posts: {total: 0,per_page: 10,from: 1,to: 0,current_page: 1},
        offset: 4,
      }
    },
    mounted() {
      this.getPosts();
    },
    components: {
        VuePagination,
    },
    methods: {
      getPosts() {
        axios.get(`/content/post?page=${this.posts.current_page}`)
          .then(({data}) => this.posts = data);
      }
    }
  }
</script>
