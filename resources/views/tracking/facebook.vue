<template>
  <div id="table">
    <b-input-group class="mt-3 mb-3" size="sm">
      <b-form-input v-model="keyword" placeholder="Search" type="text"></b-form-input>
      <b-input-group-text slot="append">
        <b-btn class="p-0" :disabled="!keyword" variant="link" size="sm" @click="keyword = ''"><i class="fa fa-remove"></i></b-btn>
      </b-input-group-text>
    </b-input-group>
    <b-table :fields="fields" :items="items" :keyword="keyword"></b-table>
  </div>
</template>
<script>
import VueTableDynamic from 'vue-table-dynamic'
export default {
  el: '#table',
  created(){
    fetch('/accounts/fb/tracking').then(async e => {
      this.dataArray = (await e.json()).map(e => ({...e, cpr: e.spent / e.results}))
    })
  },
	data () {
		return {
			keyword: '',
			dataArray: [],
			fields: [
				{key: 'ad_id', label: 'Ad Id', sortable: true},
				{key: 'from', label: 'Date', sortable: true},
        {key: 'recorded_budget', label: 'Day Budget', sortable: true},
        {key: 'cpr', label: 'CPR', sortable: true},
        {key: 'results', label: 'Clicks (All)', sortable: true},
        {key: 'reach', label: 'Reach', sortable: true},
        {key: 'impressions', label: 'Impressions', sortable: true},
        {key: 'spent', label: 'Day Spent', sortable: true},
        {key: 'ad_name', label: 'Ad Name', sortable: true},
        {key: 'adset_name', label: 'Ad Set Name', sortable: true},
        {key: 'adset_budget', label: 'Ad Set Budget', sortable: true},
        {key: 'ad_account_name', label: 'Ad Account Name', sortable: true},
        {key: 'profile_name', label: 'Profile Name', sortable: true},
			]
		}
	},
	computed: {
		items () {
			return this.keyword
				? this.dataArray.filter(item => item.firstname.includes(this.keyword) || item.lastname.includes(this.keyword) || item.email.includes(this.keyword))
				: this.dataArray
		}
	}
};
</script>
<style>
#table {
  margin: 0 auto;
  width: 100%;
}
#table .input-group-text {
  padding: 0 0.5em 0 0.5em;
}
#table .input-group-text .fa {
  font-size: 12px;
}

</style>
