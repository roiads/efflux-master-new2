<aside class="main-sidebar">
  <a href="/admin/dashboard" class="brand-link">
    <span class="brand-text">EFFLUX<small>LLC</small></span>
  </a>
  <div class="sidebar">
    <nav>
      <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-accordion="false" data-widget="treeview">
        <x-navlink title="Dashboard" icon="clipboard-data" url="/dashboard" />
        <x-navlink title="Accounts" icon="person-lines-fill" url="/accounts" />
        <x-navgroup title="Campaigns" icon="briefcase">
          <x-navlink title="Campaign Manager" url="/campaigns" />
          <x-navlink title="Ad Manager" url="/ads" />
          <x-navlink title="Waffles" icon="columns-gap" url="/waffles" />
        </x-navgroup>
        <x-navgroup title="Site Manager" icon="tools">
          <x-navlink title="Domains" url="/content_domains" />
          <x-navlink title="Routes" url="/content_routes" />
          <x-navlink title="Tags" url="/content_tags" />
          <x-navlink title="Pages" url="/content_pages" />
          <x-navlink title="Posts" url="/content_posts" />
          <x-navlink title="Images" url="/content_images" />
        </x-navgroup>
        <x-navgroup title="Tracking" icon="geo">
          <x-navlink title="All Traffic" url="/traffic" />
          <x-navgroup title="Ad Networks">
            <x-navlink title="Facebook" url="/traffic/networks/facebook" />
            <x-navlink title="Taboola" url="/traffic/networks/taboola" />
            <x-navlink title="System1" url="/traffic/networks/system1" />
          </x-navgroup> 
        </x-navgroup>
        <x-navgroup title="Reporting" icon="table">
          <x-navlink title="Ad Networks" url="/reports/networks" />
          <x-navlink title="Clicks" url="/reports/clicks" />
          <x-navlink title="Leads" url="/reports/leads" />
        </x-navgroup>
        @if(auth()->user()->admin())
          <x-navgroup title="Admin" icon="shield-lock-fill">
            <x-navlink title="Spend Sources" url="/reports/spendsources" />
            <x-navlink title="Users & Permissions" url="/users" />
          </x-navgroup>
        @endif
      </ul>
    </nav>
  </div>
</aside>