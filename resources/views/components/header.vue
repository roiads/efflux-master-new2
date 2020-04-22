<template>
  <nav class="main-header navbar navbar-expand shadow-sm">
    <ul class="navbar-nav mr-3">
      <li class="nav-item">
        <a
          class="nav-link h2"
          data-widget="pushmenu"
          href="#"
          data-toggle="tooltip"
          data-placement="left"
          title="Toggle Navigation"
        >
          <b-icon icon="text-indent-right"></b-icon>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"></li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-widget="control-sidebar"
          data-slide="true"
          href="#"
          data-toggle="tooltip"
          data-placement="left"
          title="Settings"
        >
          <b-icon icon="tools"></b-icon>
        </a>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "x-header",
  props: [],
  mounted() {}
};
</script>
