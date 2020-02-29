<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <crumbs page="posts" :name="post.title"></crumbs>
            <tbar :id="post.id"></tbar>
          </div>
          <h1>Posts</h1>
        </div>
        <div class="row">
          <xList @setId="setId"></xList>
          <xOverview :id="id" @setObj="setObj"></xOverview>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import xAdd from './posts/add'
import xOverview from './posts/overview'
import xList from './posts/list'
import xEditor from './posts/editor'
export default {
  name: 'posts',
  components: {
    xList,
    xOverview,
    xAdd,
    xEditor
  },
  data() {
    return {
      id: 0,
      post: [],
      posts: [],
      form: new Form({
        'name': ''
      })
    }
  },
  methods: {
    onSubmit() {
      this.form
        .post('/content/post')
        .then(r => this.posts.push(r));
    },
    setId(id) {
      this.id = id;
    },
    setObj(obj) {
      this.post = obj;
      this.$store.commit('setData', {
        name: 'post',
        data: obj
      })
    }
  }
}
</script>
<style>
</style>
