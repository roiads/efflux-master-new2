<template>
  <div class="container-fluid">
    <b-form @submit="onSubmit">
      <b-form-group id="title" label="Title:" type="text" label-for="title">
        <b-form-input
          id="title"
          v-model="post.title"
          type="text"
          required
          placeholder="Enter Title"
        ></b-form-input>
      </b-form-group>
      <b-form-group id="description" label="Description:" type="text" label-for="description">
        <b-form-textarea
          id="description"
          rows="5"
          max-rows="5"
          v-model="post.description"
          type="textarea"
          required
          placeholder="Enter Description"
        ></b-form-textarea>
      </b-form-group>
      <b-form-group id="excerpt" label="Excerpt:" type="text" label-for="excerpt">
        <b-form-textarea
          id="excerpt"
          rows="5"
          max-rows="5"
          v-model="post.excerpt"
          type="textarea"
          required
          placeholder="Enter Excerpt"
        ></b-form-textarea>
      </b-form-group>
      <b-form-group id="image" label="Image:" type="text" label-for="image">
        <b-form-file
          placeholder="Choose an image or drop it here..."
          drop-placeholder="Drop file here..."
        ></b-form-file>
      </b-form-group>
      <label>Body:</label>
      <div id="editor"></div>
      <b-button class="btn-block btn-lg" type="submit" variant="primary">Submit</b-button>
    </b-form>
  </div>
</template>

<script>
export default {
  name: "site-manager-post-edit",
  props: ["post"],
  data() {
    return {};
  },
  methods: {
    onSubmit(evt) {
      axios
        .post(`/api/site-manager/post/`)
        .then(({ data }) => (this.post = data));
    },
    getPost() {
      axios
        .get(`/api/site-manager/post/${this.post}`)
        .then(({ data }) => (this.post = data));
    }
  },
  mounted() {
    if (!this.post.id) {
      this.getPost();
    }
    ClassicEditor.create(document.querySelector("#editor"))
      .then(editor => {
        console.log(editor);
      })
      .catch(error => {
        console.error(error);
      });
  }
};
</script>
<style scoped>
</style>

