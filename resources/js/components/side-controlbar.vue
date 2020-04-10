<template>
  <aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
      <h5 v-text="username"></h5>
      <a
        class="d-block"
        href="javascript:{}"
        onclick="document.getElementById('logout-form').submit();"
      >Logout</a>
      <form id="logout-form" action="/logout" method="POST" style="display: none;">
        <input type="hidden" name="_token" :value="csrf" />
      </form>
    </div>
  </aside>
</template>
<script>
export default {
  name: "side-controlbar",
  props: ["username"],
  mounted() {},
  data() {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
    };
  }
};
</script>
