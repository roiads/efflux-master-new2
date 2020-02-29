<template>
  <div class="col-md-8 col-lg-9" id="domain-overview">
    <div class="card animated fadeInUp fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title mb-0" v-html="fullName"></h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#profile_add">
            <i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="jumbotron" v-html="fullName"></div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ['id'],
  data() {
    return {
      profile: {}
    }
  },
  created() {},
  watch: {
    id: function(newVal, oldVal) { // watch it
      this.getData();
    }
  },
  computed: {
    fullName() {
      return this.profile.firstname + ' ' + this.profile.lastname;
    }
  },
  methods: {
    getData() {
      axios.get('/account/profile/' + this.id)
        .then(({
          data
        }) => this.$emit('setObj', (this.profile = data)));
    }
  }
}
</script>
