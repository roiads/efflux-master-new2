<template>
  <div>
    <form class="" action="/domain/create" method="POST">
      <input type="text" name="name" placeholder="Domain Name">
      <input type="text" name="name" placeholder="IP Address">
      <input type="text" name="name" placeholder="Registrar ID">
      <input type="submit" value="Save" class="btn btn-success" />
    </form>
  </div>
</template>
<script>
export default {
  data() {
      return {
        id: 0
      }
    },
    mounted() {

    },
    methods: {

    }
}
</script>
