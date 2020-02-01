<aside class="main-sidebar elevation-4 sidebar-light-primary" style="background:#d9dadacc;">
    <a href="/admin/dashboard" class="brand-link bg-gradient-dark m-0 px-2 py-0 text-white">
      <i class="fab fa-erlang"></i>
      <span class="brand-text">fflux</span>
    </a>
    <div class="sidebar">
        <div class="user-panel py-2 d-none">
            <div class="image">
                <i class="fa fa-user text-muted mt-2"></i>
            </div>
            <div class="info">
                <a class="d-block" href="#">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat nav-child-indent" data-widget="treeview" role="menu" data-accordion="true">
                <li class="nav-item">
                    <router-link tag="a" to="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link tag="a" to="/ad_creator" class="nav-link">
                        <i class="nav-icon fas fa-palette"></i>
                        <p>Content Creator</p>
                    </router-link>
                </li>
                <li class="nav-item has-treeivew">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>Accounts <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <router-link tag="a" to="/accounts/facebook" class="nav-link">
                          <i class="fab fa-facebook nav-icon ml-2"></i>
                          <p>Facebook</p>
                        </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link tag="a" to="/accounts/taboola" class="nav-link">
                          <i class="fas fa-ad nav-icon ml-2"></i>
                          <p>Taboola</p>
                        </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link tag="a" to="/accounts/google" class="nav-link">
                          <i class="fab fa-google nav-icon ml-2"></i>
                          <p>Google.ads</p>
                        </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link tag="a" to="/accounts/contentad" class="nav-link">
                          <i class="fab fa-adversal nav-icon ml-2"></i>
                          <p>Content.ad</p>
                        </router-link>
                      </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <router-link tag="a" to="/campaigns" class="nav-link">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>Campaign Manager</p>
                    </router-link>
                </li>
                <li class="nav-item has-treeivew">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>Reporting <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <router-link tag="a" to="/reports/revenue" class="nav-link">
                          <i class="fas fa-funnel-dollar nav-icon ml-2"></i>
                          <p>Revenue Sources</p>
                        </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link tag="a" to="/reports/network" class="nav-link">
                          <i class="fas fa-network-wired nav-icon ml-2"></i>
                          <p>Network Stats</p>
                        </router-link>
                      </li>
                      <li class="nav-item">
                        <router-link tag="a" to="/reports/user" class="nav-link">
                          <i class="fas fa-users nav-icon ml-2"></i>
                          <p>User Stats</p>
                        </router-link>
                      </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <router-link tag="a" to="/users" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>Users</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link tag="a" to="/rules" class="nav-link">
                        <i class="nav-icon fas fa-shield-alt"></i>
                        <p>Rules</p>
                    </router-link>
                </li>
            </ul>
        </nav>
    </div>
</aside>
