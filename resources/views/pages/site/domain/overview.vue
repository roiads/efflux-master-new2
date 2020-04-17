<template>
  <div class="col-sm-8 col-lg-9" id="domain-overview">
    <div class="row" v-if="domain.id">
      <stat-box
        bg="gray"
        size="col-sm-11 col-md-10 col-lg-9"
        :header="domain.name"
        :url="'https://'+domain.name"
        :message="domain.notes"
        icon="sitemap"
        footer="view live..."
      ></stat-box>
      <div class="col-sm-7 col-md-6">
        <div class="card animated fadeInUp fast card-light">
          <div class="card-body p-0">
            <div class="card-header bg-gradient-dark py-1 px-3">
              <h3 class="card-title mb-0">Routes:</h3>
            </div>
            <table class="table table-hover">
              <tbody>
                <tr v-for="route in domain.routes" :key="route.id">
                  <td>{{route.name}}</td>
                  <td>{{route.page_id}}</td>
                  <td class="btn-group">
                    <button class="btn">
                      <i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm-5 col-md-4">
        <div class="card animated fadeInUp fast card-light">
          <div class="card-body p-0">
            <div class="card-header bg-gradient-dark py-1 px-3">
              <h3 class="card-title mb-0">Sub Domains:</h3>
            </div>
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td>Coming</td>
                  <td>Soon!</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "DomainOverview",
  props: ["id"],
  data() {
    return {
      domain: {}
    };
  },
  watch: {
    id: function(newVal, oldVal) {
      // watch it
      this.getDomain();
    }
  },
  methods: {
    getDomain() {
      axios
        .get("/domain/" + this.id)
        .then(({ data }) => this.$emit("setObj", (this.domain = data)));
    }
  }
};
</script>
<style scoped>
</style>