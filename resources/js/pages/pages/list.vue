<template>
  <div class="col-md-4 col-lg-3">
    <div class="card animated fadeInLeft fast card-light">
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <template v-for="page in pages">
              <tr>
                <td @click="$emit('setId', page.id )">{{page.title}}</td>
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
  name: 'pageList',
  data() {
    return {
      pages: []
    }
  },
  created() {
    axios.get('/content/page')
      .then(({
        data
      }) => this.setList(data))
  },
  methods: {
    setList: function(d) {
      this.pages = d;
      this.$store.commit('setList', {
        name: 'pages',
        data: d
      });
    }
  }
}
</script>
