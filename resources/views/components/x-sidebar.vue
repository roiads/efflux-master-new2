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

          <li class="nav-item has-treeivew">
            <b-link href="#" class="nav-link">
              <b-icon-tools />
              <p>
                Site Manager
                <b-icon-chevron-compact-down />
              </p>
            </b-link>
            <ul class="nav nav-treeview">
              <x-sidebar-link title="Site Manager" url="/site-manager"></x-sidebar-link>
              <x-sidebar-link title="Pages" url="/sites/pages"></x-sidebar-link>
              <x-sidebar-link title="Posts" url="/sites/posts"></x-sidebar-link>
              <x-sidebar-link title="Images" url="/sites/images"></x-sidebar-link>
            </ul>
          </li>
          <li class="nav-item has-treeivew">
            <a href="#" class="nav-link">
              <b-icon-geo />
              <p>
                Tracking
                <b-icon-chevron-compact-down />
              </p>
            </a>
            <ul class="nav nav-treeview">
              <x-sidebar-link title="All Traffic" url="/traffic"></x-sidebar-link>
              <li class="nav-item has-treeivew">
                <a href="#" class="nav-link">
                  <p>
                    Ad Networks
                    <b-icon-chevron-compact-down />
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <x-sidebar-link title="Facebook" url="/traffic/networks/facebook"></x-sidebar-link>
                  <x-sidebar-link title="Taboola" url="/traffic/networks/taboola"></x-sidebar-link>
                  <x-sidebar-link title="System1" url="/traffic/networks/system1"></x-sidebar-link>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeivew">
            <a href="#" class="nav-link">
              <b-icon-table />
              <p>
                Reporting
                <b-icon-chevron-compact-down />
              </p>
            </a>
            <ul class="nav nav-treeview">
              <x-sidebar-link title="Ad Networks" url="/reports/networks"></x-sidebar-link>
              <x-sidebar-link title="Clicks" url="/reports/clicks"></x-sidebar-link>
              <x-sidebar-link title="Leads" url="/reports/leads"></x-sidebar-link>
            </ul>
          </li>
          <li class="nav-item has-treeivew">
            <a href="#" class="nav-link">
              <b-icon-shield-lock-fill />
              <p>
                Admin
                <b-icon-chevron-compact-down />
              </p>
            </a>
            <ul class="nav nav-treeview">
              <x-sidebar-link title="Spend Sources" url="/reports/spendsources"></x-sidebar-link>
              <x-sidebar-link title="Users & Permissions" url="/users"></x-sidebar-link>
            </ul>
          </li>
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
