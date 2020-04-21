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
          <x-sidebar-link title="Dashboard" icon="house-fill" url="/home"></x-sidebar-link>
          <x-sidebar-link title="Entourage" icon="person-lines-fill" url="/entourage"></x-sidebar-link>
          <x-sidebar-link title="Site Manager" icon="tools" url="/site-manager"></x-sidebar-link>
          <x-sidebar-link title="Traffic Monitor" icon="geo" url="/tracker"></x-sidebar-link>
        </ul>
      </nav>
    </div>
  </aside>
</template>
<script>
export default {
  name: "x-sidebar",
  props: [],
  mounted() {}
};
</script>
