<template>
  <div class="col-md-4 col-lg-3">
    <div class="card animated fadeInLeft fast card-light">
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <template v-for="post in posts">
              <tr>
                <td @click="$emit('setId', post.id )">{{post.title}}</td>
                <td class="btn-group">
                  <button class="btn" data-toggle="modal" data-target="#mdl-page">
                    <i class="fas fa-edit"></i>
                  </button>
                </td>
              </tr>
            </template>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'postList',
  data() {
    return {
      posts: []
    }
  },
  created() {
    axios.get('/content/post')
      .then(({
        data
      }) => this.setList(data))
  },
  methods: {
    setList: function(d) {
      this.posts = d;
      this.$store.commit('setList', {
        name: 'posts',
        data: d
      });
    }
  }
}
</script>
