<template>
  <b-container fluid>
    <!-- User Interface controls -->
    <b-card no-body class="p-2 bg-gradient-light">
      <b-row>
        <b-col lg="6" class="my-1">
          <b-form-group
            label="Sort"
            label-cols-sm="3"
            label-align-sm="right"
            label-size="sm"
            label-for="sortBySelect"
            class="mb-0"
          >
            <b-input-group size="sm">
              <b-form-select v-model="sortBy" id="sortBySelect" :options="sortOptions" class="w-75">
                <template v-slot:first>
                  <option value>-- none --</option>
                </template>
              </b-form-select>
              <b-form-select v-model="sortDesc" size="sm" :disabled="!sortBy" class="w-25">
                <option :value="false">Asc</option>
                <option :value="true">Desc</option>
              </b-form-select>
            </b-input-group>
          </b-form-group>
        </b-col>

        <b-col lg="6" class="my-1">
          <b-form-group
            label="Filter"
            label-cols-sm="3"
            label-align-sm="right"
            label-size="sm"
            label-for="filterInput"
            class="mb-0"
          >
            <b-input-group size="sm">
              <b-form-input
                v-model="filter"
                type="search"
                id="filterInput"
                placeholder="Type to Search"
              ></b-form-input>
              <b-input-group-append>
                <b-button :disabled="!filter" @click="filter = ''">Clear</b-button>
              </b-input-group-append>
            </b-input-group>
          </b-form-group>
        </b-col>

        <b-col lg="6" class="my-1">
          <b-form-group
            label="Filter On"
            label-cols-sm="3"
            label-align-sm="right"
            label-size="sm"
            description="Leave all unchecked to filter on all data"
            class="mb-0"
          >
            <b-form-checkbox-group v-model="filterOn" class="mt-1">
              <b-form-checkbox value="active">Active</b-form-checkbox>
            </b-form-checkbox-group>
          </b-form-group>
        </b-col>

        <b-col sm="5" md="6" class="my-1">
          <b-form-group
            label="Per page"
            label-cols-sm="6"
            label-cols-md="4"
            label-cols-lg="3"
            label-align-sm="right"
            label-size="sm"
            label-for="perPageSelect"
            class="mb-0"
          >
            <b-form-select v-model="perPage" id="perPageSelect" size="sm" :options="pageOptions"></b-form-select>
          </b-form-group>
        </b-col>
      </b-row>
    </b-card>

    <!-- Main table element -->
    <b-card no-body>
      <b-table
        responsive
        selectable
        select-mode="single"
        striped
        hover
        show-empty
        :items="profiles"
        :fields="fields"
        :current-page="currentPage"
        :filter="filter"
        :filterIncludedFields="filterOn"
        :sort-by.sync="sortBy"
        :sort-desc.sync="sortDesc"
        :sort-direction="sortDirection"
        @filtered="onFiltered"
        @row-selected="$emit('set-profile', $event)"
        primary-key="id"
      >
        <template v-slot:cell(actions)="row">
          <b-button
            size="sm"
            variant="primary"
            @click="row.toggleDetails"
          >{{ row.detailsShowing ? 'Hide' : 'Show' }} Accounts</b-button>
        </template>
        <template v-slot:row-details="row">
          <b-card bg-variant="orange">
            <ul>
              <li
                v-for="(value, key) in row.item.accounts"
                :key="key"
              >{{value.type}} : {{value.username }} / {{value.password}}</li>
            </ul>
          </b-card>
        </template>
      </b-table>
    </b-card>
  </b-container>
</template>

<script>
export default {
  name: "entourage-profile-list",
  data() {
    return {
      profiles: [],
      fields: [
        {
          key: "id",
          label: "ID",
          sortable: true,
          sortDirection: "desc"
        },
        {
          key: "status",
          label: "is Active",
          formatter: (value, key, item) => {
            return value ? "Yes" : "No";
          },
          sortable: true,
          sortByFormatted: true,
          filterByFormatted: true
        },
        { key: "firstname", label: "First Name" },
        { key: "lastname", label: "Last Name" },
        { key: "actions", label: "Actions" }
      ],
      totalRows: 1,
      currentPage: 1,
      perPage: 15,
      pageOptions: [15, 50, 100],
      sortBy: "",
      sortDesc: false,
      sortDirection: "asc",
      filter: null,
      filterOn: [],
      infoModal: {
        id: "info-modal",
        title: "",
        content: ""
      }
    };
  },
  computed: {
    sortOptions() {
      return this.fields
        .filter(f => f.sortable)
        .map(f => {
          return { text: f.label, value: f.key };
        });
    }
  },
  mounted() {
    this.getProfiles();
    this.totalRows = this.profiles.length;
  },
  methods: {
    info(item, index, button) {
      this.infoModal.title = `Row index: ${index}`;
      this.infoModal.content = JSON.stringify(item, null, 2);
      this.$root.$emit("bv::show::modal", this.infoModal.id, button);
    },
    resetInfoModal() {
      this.infoModal.title = "";
      this.infoModal.content = "";
    },
    onFiltered(filteredItems) {
      this.totalRows = filteredItems.length;
      this.currentPage = 1;
    },
    getProfiles() {
      axios
        .get(`/api/entourage/profile?page=${this.profiles.current_page}`)
        .then(({ data }) => (this.profiles = data));
    }
  }
};
</script>