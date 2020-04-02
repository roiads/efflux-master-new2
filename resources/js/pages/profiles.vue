<template>
  <div>
    <section class="content">
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <crumbs page="accounts" name="Profiles" :view="fullName"></crumbs>
            <tbar :id="profile.id"></tbar>
          </div>
          <h1>Profile Manager</h1>
        </div>
        <div class="row">
          <xTable @setId="setId"></xTable>
          <xOverview :id="id" @setObj="setObj"></xOverview>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import xAdd from './profiles/add'
import xOverview from './profiles/overview'
import xList from './profiles/list'
import xTable from './profiles/table'
export default {
  name: 'profiles',
  components: {
    xList,
    xTable,
    xOverview,
    xAdd
  },
  data() {
    return {
      id: 0,
      profile: [],
      profiles: [],
      form: new Form({
        'firstname': '',
        'lastname': '',
        'dob': '',
        'gender': ''
      })
    }
  },
  computed: {
    fullName: function() {
      var name = '';
      if (this.profile.firstname) {
        name = this.profile.firstname + ' ' + this.profile.lastname;
      }
      return name;
    }
  },
  created() {
    axios.get('/account/profile')
      .then(r => this.profiles = r);
  },
  methods: {
    onSubmit() {
      this.form
        .post('/account/profile')
        .then(r => this.profiles.push(r));
    },
    setId(id) {
      this.id = id;
    },
    setObj(obj) {
      this.profile = obj;
      this.$store.commit('setData', {
        name: 'profile',
        data: obj
      })
    }
  }
}
</script>
<style>
</style>
