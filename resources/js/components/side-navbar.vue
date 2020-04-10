<template>
  <aside class="main-sidebar">
    <a href="/admin/dashboard" class="brand-link">
      <span class="brand-text">
        EFFLUX
        <small>LLC</small>
      </span>
    </a>
    <div class="sidebar">
      <nav>
        <ul
          class="nav nav-pills nav-sidebar flex-column nav-flat"
          data-accordion="true"
          data-widget="treeview"
        >
          <side-navbar-link title="Dashboard" icon="clipboard-data" url="/dashboard" />
          <li class="nav-item has-treeivew">
            <a href="#" class="nav-link h5">
              <b-icon icon="person-lines-fill" variant="gray" class="mr-2"></b-icon>
              <p>
                Account Manager
                <b-icon icon="chevron-compact-down" variant="gray"></b-icon>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <side-navbar-link title="Profiles" url="/account_profiles" />
              <side-navbar-link title="Accounts" url="/accounts" />
              <side-navbar-link title="Account Types" url="/account_types" />
            </ul>
          </li>
          <li class="nav-item has-treeivew">
            <a href="#" class="nav-link h5">
              <b-icon icon="briefcase" variant="gray" class="mr-2"></b-icon>
              <p>
                Campaigns
                <b-icon icon="chevron-compact-down" variant="gray"></b-icon>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <side-navbar-link title="Campaign Manager" url="/campaigns" />
              <side-navbar-link title="Ad Manager" url="/ads" />
              <side-navbar-link title="Waffles" icon="columns-gap" url="/waffles" />
            </ul>
          </li>
          <li class="nav-item has-treeivew">
            <a href="#" class="nav-link h5">
              <b-icon icon="tools" variant="gray" class="mr-2"></b-icon>
              <p>
                Site Manager
                <b-icon icon="chevron-compact-down" variant="gray"></b-icon>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <side-navbar-link title="Domains" url="/content_domains" />
              <side-navbar-link title="Routes" url="/content_routes" />
              <side-navbar-link title="Tags" url="/content_tags" />
              <side-navbar-link title="Pages" url="/content_pages" />
              <side-navbar-link title="Posts" url="/content_posts" />
              <side-navbar-link title="Images" url="/content_images" />
            </ul>
          </li>
          <li class="nav-item has-treeivew">
            <a href="#" class="nav-link h5">
              <b-icon icon="geo" variant="gray" class="mr-2"></b-icon>
              <p>
                Tracking
                <b-icon icon="chevron-compact-down" variant="gray"></b-icon>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <side-navbar-link title="All Traffic" url="/traffic" />
              <li class="nav-item has-treeivew">
                <a href="#" class="nav-link h5">
                  <p>
                    Ad Networks
                    <b-icon icon="chevron-compact-down" variant="gray"></b-icon>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <side-navbar-link title="Facebook" url="/traffic/networks/facebook" />
                  <side-navbar-link title="Taboola" url="/traffic/networks/taboola" />
                  <side-navbar-link title="System1" url="/traffic/networks/system1" />
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeivew">
            <a href="#" class="nav-link h5">
              <b-icon icon="table" variant="gray" class="mr-2"></b-icon>
              <p>
                Reporting
                <b-icon icon="chevron-compact-down" variant="gray"></b-icon>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <side-navbar-link title="Ad Networks" url="/reports/networks" />
              <side-navbar-link title="Clicks" url="/reports/clicks" />
              <side-navbar-link title="Leads" url="/reports/leads" />
            </ul>
          </li>
          <li class="nav-item has-treeivew">
            <a href="#" class="nav-link h5">
              <b-icon icon="shield-lock-fill" variant="gray" class="mr-2"></b-icon>
              <p>
                Admin
                <b-icon icon="chevron-compact-down" variant="gray"></b-icon>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <side-navbar-link title="Spend Sources" url="/reports/spendsources" />
              <side-navbar-link title="Users & Permissions" url="/users" />
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
</template>
<script>
export default {
  name: "side-navbar",
  props: [],
  mounted() {}
};
</script>
