<aside class="main-sidebar">
  <a href="/admin/dashboard" class="brand-link"><i class="fab fa-erlang"></i><span class="brand-text">fflux</span></a>
  <div class="sidebar">
    <nav>
      <ul class="nav nav-pills nav-sidebar flex-column nav-flat" role="menu" data-accordion="true" data-widget="treeview">
        @vLink([
          'title'=>'Dashboard',
          'icon'=>'tachometer-alt fas',
          'url'=>'/dashboard'])
        @vLinks([
          'title'=>'Accounts',
          'icon'=>'id-card fas'])
          @vLink([
            'title'=>'SnapChat',
            'icon'=>'snapchat-square fab',
            'url'=>'/accounts/snapchat'])
          @vLink([
            'title'=>'Google',
            'icon'=>'google fab',
            'url'=>'/accounts/google'])
          @vLink([
            'title'=>'Taboola',
            'icon'=>'ad fas',
            'url'=>'/accounts/taboola'])
          @vLink([
            'title'=>'Content.ad',
            'icon'=>'adversal fab',
            'url'=>'/accounts/contentad'])
        @endvLinks
        @vLink([
          'title'=>'Content Creator',
          'icon'=>'palette fas',
          'url'=>'/ad_creator'])
        @vLink([
          'title'=>'Domain Manager',
          'icon'=>'sitemap fas',
          'url'=>'/domains'])

        @vLink([
          'title'=>'Campaign Manager',
          'icon'=>'bullhorn fas',
          'url'=>'/campaigns'])
        @vLinks([
          'title'=>'Reporting',
          'icon'=>'chart-line fas'])
          @vLink([
            'title'=>'Revenue Sources',
            'icon'=>'funnel-dollar fas',
            'url'=>'/reports/revenue'])
          @vLink([
            'title'=>'Network Stats',
            'icon'=>'network-wired fas',
            'url'=>'/reports/network'])
          @vLink([
            'title'=>'User Stats',
            'icon'=>'users fas',
            'url'=>'/reports/user'])
        @endvLinks
        @vLink([
          'title'=>'Rules',
          'icon'=>'shield-alt fas',
          'url'=>'/rules'])
        @vLinks([
          'title'=>'Payment Methods',
          'icon'=>'dollar-sign fas'])
          @vLink([
            'title'=>'Credit Cards',
            'icon'=>'credit-card fas',
            'url'=>'/spend/cc'])
          @vLink([
            'title'=>'Paypal',
            'icon'=>'cc-paypal fab',
            'url'=>'/spend/paypal'])
          @vLink([
            'title'=>'ACH / Bank',
            'icon'=>'university fas',
            'url'=>'/spend/bank'])
        @endvLinks
        @vLink([
          'title'=>'Users',
          'icon'=>'users-cog fas',
          'url'=>'/users'])
      </ul>
    </nav>
  </div>
</aside>