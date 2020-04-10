<template>
  <nav class="main-header navbar navbar-expand shadow-sm bg-gradient-backdrop">
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
    <form class="form-inline search">
      <div class="input-group input-group-sm">
        <input
          class="form-control form-control-navbar"
          type="search"
          placeholder="Search"
          aria-label="Search"
        />
        <div class="input-group-append" style="opacity:0.5">
          <button class="btn btn-navbar bg-light p-0 px-2" type="submit">
            <i class="fas fa-search text-muted"></i>
          </button>
        </div>
      </div>
    </form>
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
  name: "top-navbar",
  props: [],
  mounted() {}
};
</script>
