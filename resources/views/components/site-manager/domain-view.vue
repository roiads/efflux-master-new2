<template>
  <div>
    <div class="content-header">
      <b-container fluid class="row">
        <x-breadcrumb page="domain-view-show"></x-breadcrumb>
        
      </b-container>
    </div>
    <section class="content">
      <div class="container-fluid">

        <div>
          <b-card no-body>
            <b-tabs pills card>
              <b-tab title="Posts" active>
                <b-card-text>
                  <div class="pull-right">
                    <b-button :to="{ path: '/addpost/sevenbars.com' }">Add Post</b-button>
                  </div>
                  <div class="clearfix"></div>
                    <div class="divide20"></div>
                    
                   <b-table striped hover :items="itemspost">
                   <template v-slot:cell(actions)="data">
                      <b-link :to="{ path: '/site-manager/' + data.value}" replace>Test</b-link>
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

        <b-row>
        <router-link to="site-manager">Home</router-link>
          <b-col><b-link href="/editor/1">Editor</b-link></b-col>
          <b-col><b-link href="/editor/1">Editor</b-link></b-col>
        </b-row>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  name: "domain-view-show",
  data() {
    
  }
};
</script>
<script>
  export default {
    data() {
      return {
        itemspost: [
          { post_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', post_url: 'https://sevenbars.com/weight-loss-guide', actions: '' },          
          { post_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', post_url: 'https://sevenbars.com/weight-loss-guide', actions: '' },          
          { post_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', post_url: 'https://sevenbars.com/weight-loss-guide', actions: '' },          
          { post_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', post_url: 'https://sevenbars.com/weight-loss-guide', actions: '' },          
        ],
        itemspages: [
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="">Edit</a>' },          
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="">Edit</a>' },          
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="">Edit</a>' },          
          { page_title: 'Weight Loss Is Hard | The No Nonsense Guide To Seeing Results', page_url: 'https://sevenbars.com/weight-loss-guide', actions: '<a href="">Edit</a>' },          
        ]
      }
    }
  }
</script>
<style scoped>
</style>
