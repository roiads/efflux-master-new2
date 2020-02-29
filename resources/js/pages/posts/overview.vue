<template>
  <div class="col-md-8 col-lg-9" id="post-overview">
    <div class="card animated fadeInUp fast card-light" v-if="post.title">
      <div class="card-header py-2">
        <h3 class="card-title mb-0" v-html="post.title"></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#domain_add"><i class="fas fa-plus"></i></button>
        </div>
      </div>
      <div class="card-body">
        <div class="raw-html">
          <pre>
            &lt;template&gt;
              {{ post.html }}
            &lt;/template&gt;
          </pre>
        </div>
        <div class="raw-js">
          <pre>
            &lt;script&gt;
              {{ post.js }}
            &lt;/script&gt;
          </pre>
        </div>
        <div class="raw-css">
          <pre>
            &lt;style scoped&gt;
              {{ post.css }}
            &lt;/style&gt;
          </pre>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'postOverview',
  props: ['id'],
  data() {
    return {
      post: {}
    }
  },
  created() {},
  watch: {
    id: function(newVal, oldVal) { // watch it
      this.getPost();
    }
  },
  methods: {
    getPost() {
      axios.get('/content/post/' + this.id)
        .then(({
          data
        }) => this.$emit('setObj', (this.post = data)));
    }
  }
}
</script>
