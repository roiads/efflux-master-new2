<template>
  <div class="col-sm-4 col-lg-3">
    <div class="card animated fadeIn fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title">Sites</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <tr v-for="domain in domains.data">
              <td @click="$emit('setId', domain.id )">{{domain.name}}</td>
            </tr>
          </tbody>
        </table>
        <vue-pagination :pagination="domains" @paginate="getDomains()"></vue-pagination>
      </div>
    </div>
  </div>
</template>
<script>
import VuePagination from '../../components/pagination.vue'
export default {
  name: 'domainsList',
  data() {
    return {
      domains: {
        total: 0,
        per_page: 10,
        from: 1,
        to: 0,
        current_page: 1
      },
      offset: 4,
      domain: []
    }
  },
  mounted() {
    this.getDomains();
  },
  components: {
      VuePagination,
  },
  methods: {
    getDomains() {
      axios.get(`/domain?page=${this.domains.current_page}`)
        .then(({
          data
        }) => this.domains = data);
    }
  }
}
</script>
