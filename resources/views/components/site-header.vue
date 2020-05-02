<template>
  <nav class="main-header navbar navbar-expand shadow-sm bg-dark p-0">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a
          class="nav-link"
          data-widget="pushmenu"
          href="#"
          data-toggle="tooltip"
          data-placement="left"
          title="Toggle Navigation"
        >
          <b-icon-text-indent-right />
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
  name: "site-header"
};
</script>
