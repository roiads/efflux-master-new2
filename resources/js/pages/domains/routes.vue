<template>
  <table class="table table-hover">
    <tbody>
      <template v-for="route in routes">
        <tr @click="$emit('selectID', route.id )">
          <td>{{route.name}}</td>
          <td v-if="domain">{{route.page_id}}</td>
          <td v-if="page">{{route.domain_id}}</td>
          <td class="btn-group">
            <button class="btn" data-toggle="modal" data-target="#mdl-routes">
              <i class="fas fa-edit"></i>
            </button>
          </td>
        </tr>
      </template>
    </tbody>
  </table>
</template>
<script>
export default {
  props: ['id', 'domain', 'page'],
  data() {
    return {
      routes: []
    }
  },
  created() {
    axios.get('/route')
      .then(({
        data
      }) => this.routes = data);
  },
  mounted() {}
}
</script>
