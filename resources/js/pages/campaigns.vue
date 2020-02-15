<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <h3>Campaigns</h3>
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
      items: [],
      form: new Form({
        'name': ''
      })
    }
  },
  created() {
    axios.get('/campaign')
      .then(r => this.items = r);
  },
  methods: {
    onSubmit() {
      this.form
        .post('/campaign')
        .then(r => this.items.push(r));
    }
  }
}
</script>
<style>
</style>
