<template>
  <div class="col-sm-4 col-lg-3">
    <div class="card animated fadeInLeft fast card-light">
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <tr v-for="domain in domains">
              <td @click="$emit('setId', domain.id )">{{domain.name}}</td>
              <td class="btn-group">
                <button class="btn">
                  <i class="fas fa-external-link-alt"></i>
                </button>
              </td>
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
