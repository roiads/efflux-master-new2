<template>
  <div class="col-md-4">
    <div class="card animated fadeInUp fast card-light">
      <div class="card-header py-2">
        <h3 class="card-title mb-0">Accounts</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#account_add">
            <i class="fas fa-plus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-hover ">
          <thead>
          <tr>
            <th class="d-none">ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
          </tr>
          </thead>
          <tbody>
          <tr v-for="domain in domains">
            <td class="d-none" name="id">{{account.id}}</td>
            <td>{{account.name}}</td>
            <td>{{account.username}}</td>
            <td>{{account.password}}</td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>


<script>
  export default {
    data() {
      return {
        domains: []
      }
    },
    created() {
    },
    methods: {
    }
  }
</script>
