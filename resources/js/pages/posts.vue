<template>
    <section class="content">
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <crumbs page="posts" :name="post.title"></crumbs>
            <tbar :id="post.id" @addClick="addClick" @editClick="editClick" @closeClick="closeClick"></tbar>
          </div>
          <h1>Posts</h1>
        </div>
        <div class="row">
          <xList @setId="setId"></xList>
          <xEditor :id="id" @setObj="setObj"></xEditor>
        </div>
      </div>
    </section>
</template>
<script>
import xAdd from './posts/add'
import xOverview from './posts/overview'
import xList from './posts/list'
import xEditor from './posts/editor'
import {bus} from '../app'
export default {
  name: 'posts',
  components: {
    xList,
    xOverview,
    xAdd,
    xEditor
  },
  created(){
    bus.$on('x-add', (data) => {
      console.log(data);
    })
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
    },
    addClick(){
      console.log('add')
    },
    editClick (){
      console.log('edit')
    },
    closeClick (){
      console.log('close')
    },
  }
}
</script>
<style>
</style>
