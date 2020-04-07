<template>
  <div class="col-md-4 col-lg-3">
    <div class="card animated fadeInLeft fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title">Pages</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <tr v-for="page in pages.data" :key="page.id">
              <td @click="$emit('setPage', page )">{{ page.title }}</td>
            </tr>
          </tbody>
        </table>
        <vue-pagination :pagination="pages" @paginate="getPages()"></vue-pagination>
      </div>
    </div>
  </div>
</template>
<script>
  import VuePagination from '../../components/pagination.vue'
  export default {
    name: 'pageList',
    data() {
      return {
        pages: {},
        offset: 4,
      }
    },
    mounted() {
      this.getPages();
    },
    components: {
      VuePagination,
    },
    methods: {
      getPages() {
        axios.get(`/content/page?page=${this.pages.current_page}`)
          .then(({
            data
          }) => this.pages = data);
      },
      setList: function (d) {
        this.pages = d;
        this.$store.commit('setList', {
          name: 'pages',
          data: d
        });
      }
    }
  }
</script>
<style>

</style>