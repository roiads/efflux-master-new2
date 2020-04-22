<template>
  <b-container fluid>
    <b-row>
      <b-col cols="4">
        <b-card
          :header="domain.name"
          no-body
          v-for="domain in items.data"
          :key="domain.id"
          class="m-2 elevation-1"
        >
          <b-card-body>
            <trend
              :data="[3, 2, 5, 3, 5, 2, 3, 5, 3, 4, 3,4]"
              :gradient="['#fc9d03', '#fcca03', '#fc9d03']"
              :height="50"
              auto-draw
              smooth
            ></trend>

            <b-form>
              <b-row>
                <b-col>
                  <label for="input-none">SSH:</label>
                </b-col>
                <b-col cols="5">
                  <b-form-input v-model="domain.server.user" placeholder="User"></b-form-input>
                </b-col>
                <b-col cols="5">
                  <b-input-group>
                    <b-form-input
                      type="password"
                      v-model="domain.server.sudo_pass"
                      placeholder="Sudo Pass"
                    ></b-form-input>
                    <b-input-group-append>
                      <b-button size="sm" text="Button" variant="outline-primary ">
                        <b-icon icon="eye-fill"></b-icon>
                      </b-button>
                    </b-input-group-append>
                  </b-input-group>
                </b-col>
              </b-row>
              <b-row class="mt-2">
                <b-col>
                  <label for="input-none">Database:</label>
                </b-col>
                <b-col cols="5">
                  <b-form-input v-model="domain.server.db_user" placeholder="DB User"></b-form-input>
                </b-col>
                <b-col cols="5">
                  <b-input-group>
                    <b-form-input
                      type="password"
                      v-model="domain.server.db_pass"
                      placeholder="DB Pass"
                    ></b-form-input>
                    <b-input-group-append>
                      <b-button size="sm" text="Button" variant="outline-primary">
                        <b-icon icon="eye-fill"></b-icon>
                      </b-button>
                    </b-input-group-append>
                  </b-input-group>
                </b-col>
              </b-row>

              <b-row class="mt-2">
                <b-col sm="2">
                  <label for="input-none">Repository:</label>
                </b-col>
                <b-col sm="7">
                  <b-form-input
                    v-model="domain.repository"
                    id="input-none"
                    :state="null"
                    placeholder="Repository"
                  ></b-form-input>
                </b-col>
                <b-col sm="3">
                  <b-button block small variant="primary">
                    Sync
                    <b-icon icon="box-arrow-in-up-right"></b-icon>
                  </b-button>
                </b-col>
              </b-row>
            </b-form>
          </b-card-body>

          <b-card-footer no-padding>
            <b-button-group size="sm" justify>
              <b-button
                variant="outline-primary"
                :href="'https://'+ domain.name +'/'"
                target="_blank"
              >
                <b-icon icon="display" class="mr-1"></b-icon>View
              </b-button>
              <b-button
                text-variant="light"
                variant="outline-secondary"
                :to="'site-manager/'+domain.name+'/'"
              >
                <b-icon icon="display" class="mr-1"></b-icon>Content Editor
              </b-button>
              <b-button
                variant="outline-success"
                :href="'https://status.'+ domain.name +'/'"
                target="_blank"
              >
                <b-icon icon="pie-chart-fill" class="mr-1"></b-icon>Performance
              </b-button>
              <b-button variant="outline-danger" href="#">
                <b-icon icon="exclamation-circle-fill" class="mr-1"></b-icon>Alerts
              </b-button>
            </b-button-group>
          </b-card-footer>
        </b-card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: "assets-domain-list",
  props: ["server"],
  data() {
    return {
      perPage: 10,
      currentPage: 1,
      items: {}
    };
  },
  mounted() {
    this.getItems();
  },
  methods: {
    getItems() {
      axios
        .get(`/assets/domain?page=${this.items.current_page}`)
        .then(({ data }) => (this.items = data));
    }
  }
};
</script>
<style>
</style>
