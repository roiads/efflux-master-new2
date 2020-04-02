<template>
  <div class="col-sm-4 col-lg-3">
    <div class="card animated fadeIn fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title">Sites</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <tr v-for="domain in domains">
              <td @click="$emit('setId', domain.id )">{{domain.name}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'domainsList',
  data() {
    return {
      domains: [],
      domain: []
    }
  },
  created() {
    axios.get('/domain')
      .then(({
        data
      }) => this.domains = data);
  }
}
</script>
