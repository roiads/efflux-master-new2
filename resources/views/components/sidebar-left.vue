<template>
  <aside class="main-sidebar elevation-2">
    <a href="dashboard" class="brand-link">
      <span class="brand-text">
        EFFLUX
        <small>LLC</small>
      </span>
    </a>
    <div class="sidebar">
      <nav>
        <ul
          class="nav nav-pills nav-sidebar flex-column nav-flat"
          data-accordion="false"
          data-widget="treeview"
        >
          <li class="nav-item">
            <b-link to="/" class="nav-link">
              <b-icon icon="house-fill" />
              <p>Dashboard</p>
            </b-link>
          </li>
          <li class="nav-item">
            <b-link to="/entourage" class="nav-link">
              <b-icon icon="person-lines-fill" />
              <p>Entourage</p>
            </b-link>
          </li>
          <li class="nav-item">
            <b-link to="/site-manager" class="nav-link">
              <b-icon icon="tools" />
              <p>Site Manager</p>
            </b-link>
          </li>
          <li class="nav-item">
            <b-link to="/tracker" class="nav-link">
              <b-icon icon="geo" />
              <p>Traffic Monitor</p>
            </b-link>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
</template>
<script>
export default {
  name: "sidebar-left",
  props: []
};
</script>
