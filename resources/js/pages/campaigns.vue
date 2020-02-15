<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <crumbs page="campaigns" :name="campaign.name"></crumbs>
            <tbar :id="campaign.id"></tbar>
          </div>
          <h1>Campaign Manager</h1>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import xAdd from './campaigns/add'
import xOverview from './campaigns/overview'
import xList from './campaigns/list'
import xTable from './campaigns/table'
export default {
  name: 'campaigns',
  components: {
    xList,
    xTable,
    xOverview,
    xAdd
  },
  data() {
    return {
      campaign: [],
      campaigns: [],
      form: new Form({
        'name': ''
      })
    }
  },
  created() {
    axios.get('/campaign')
      .then(r => this.campaigns = r);
  },
  methods: {
    onSubmit() {
      this.form
        .post('/campaign')
        .then(r => this.campaigns.push(r));
    }
  }
}
</script>
<style>
</style>
