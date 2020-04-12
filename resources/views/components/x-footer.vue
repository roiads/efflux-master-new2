<template>
  <footer class="main-footer bg-gradient-backdrop p-2">
    <strong>Copyright &copy; {{year}} Efflux.com</strong>. All rights reserved.
  </footer>
</template>

<script>
export default {
  name: "x-footer",
  props: [],
  mounted() {},
  data() {
    return {
      year: "2020"
    };
  }
};
</script>
