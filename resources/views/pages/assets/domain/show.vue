<template>
  <div class="container-fluid">
    <div class="col-md-12">
      <div v-if="domain">
          <div>
          <b-card no-body>
            <b-tabs pills card>
              <b-tab title="Posts" active>
                <b-card-text>
                  <div class="pull-right">
                    <b-button :to="{ path: '/addpost/sevenbars.com/'}">Add Post</b-button>
                  </div>
                  <div class="clearfix"></div>
                    <div class="divide20"></div>
                    
                   <b-table striped hover :items="itemspost">
                   <template v-slot:cell(actions)="data">
                      <span v-html="data.value"></span>
                    </template>
                   </b-table>
                </b-card-text>

              </b-tab>
              <b-tab title="Pages">
                <b-card-text>
                  <div class="pull-right">
                    <b-button>Add Page</b-button>
                  </div>
                  <div class="clearfix"></div>
                    <div class="divide20"></div>
                  <b-table  striped hover :items="itemspages">
                    <template v-slot:cell(actions)="data">
                      <span v-html="data.value"></span>
                    </template>
                  </b-table>
                </b-card-text>
              </b-tab>
            </b-tabs>
          </b-card>
        </div>

        <b-table :items="domain"></b-table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "assets-domain-show",
  props: ["domain"],
  data() {
    return {
      itemspost: [
          { post_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', post_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
          { post_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', post_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
          { post_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', post_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
          { post_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', post_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
        ],
        itemspages: [
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="/editpost/1">Edit</a>' },          
        ]
    };
  },
  computed: {},
  methods: {
    getItem() {
      axios
        .get(`/api/assets/domain/${this.domain}`)
        .then(({ data }) => (this.item = data));
    }
  },
  mounted() {},
  created() {}
};
</script>
<style scoped>
</style>