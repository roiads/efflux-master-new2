<template>
  <div class="col-md-4 col-lg-3">
    <div class="card animated fadeInUp fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title">Domains</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#domain_add"><i class="fas fa-plus"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover">
          <tbody>
            <template v-for="domain in domains">
              <tr>
                <td @click="$emit('domainOverview', domain.id )">{{domain.name}}</td>
                <td class="btn-group">
                  <button class="btn" data-toggle="modal" data-target="#mdl-subdoms">
                    <i class="fa fa-network-wired"></i>
                  </button>
                </td>
              </tr>
            </template>
          </tbody>
        </table>
      </div>
    </div>
    <modal id="mdl-subdoms"></modal>
    <modal id="domain_add">
      <xAdd></xAdd>
    </modal>
  </div>
</template>
<script>
import xAdd from './add'
export default {
  name: 'domainsList',
  components: {
    xAdd
  },
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
  },
  mounted() {}
}
</script>
