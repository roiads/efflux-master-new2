<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <h3>Accounts</h3>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import xAdd from './accounts/add'
import xOverview from './accounts/overview'
import xList from './accounts/list'
import xTable from './accounts/table'
export default {
  name: 'accounts',
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
        'name': '',
        'email': '',
        'password': '',
        'type': ''
      })
    }
  },
  created() {
    axios.get('/account')
      .then(r => this.items = r);
  },
  methods: {
    onSubmit() {
      this.form
        .post('/account')
        .then(r => this.items.push(r));
    }
  }
}
</script>
<style>
</style>
