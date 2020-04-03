<aside class="main-sidebar">
<a href="/admin/dashboard" class="brand-link"><i class="fab fa-erlang"></i><span class="brand-text">fflux</span></a>
<div class="sidebar">
<nav>
<ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-accordion="true" data-widget="treeview">
  @vLink(['title'=>'Dashboard','icon'=>'tachometer-alt fas','url'=>'/dashboard'])
  @vLinks(['title'=>'Accounts','icon'=>'id-card fas'])
    @vLink(['title'=>'Profiles','icon'=>'caret-right fas','url'=>'/profiles'])
    @vLink(['title'=>'Accounts','icon'=>'caret-right fas','url'=>'/accounts'])
    @if($isAdmin = auth()->user()->admin()) 
      @vLink(['title'=>'Payment Methods','icon'=>'caret-right fas','url'=>'/payments']) 
    @endif
  @endvLinks
  @vLinks(['title'=>'Campaigns','icon'=>'bullhorn fas'])
    @vLink(['title'=>'Campaign Manager','icon'=>'caret-right fas','url'=>'/campaigns'])
    @vLink(['title'=>'Ad Manager','icon'=>'caret-right fas','url'=>'/ads'])
    @vLink(['title'=>'Waffles','icon'=>'stroopwafel fas','url'=>'/rules'])
  @endvLinks 
  @vLinks(['title'=>'Content Manager','icon'=>'edit fas'])
    @vLink(['title'=>'Categories','icon'=>'caret-right fas','url'=>'/categories'])
    @vLink(['title'=>'Pages','icon'=>'caret-right fas','url'=>'/pages'])
    @vLink(['title'=>'Posts','icon'=>'caret-right fas','url'=>'/posts'])
    @vLink(['title'=>'Images','icon'=>'caret-right fas','url'=>'/images'])
  @endvLinks
  @vLink(['title'=>'Domains & Routes','icon'=>'sitemap fas','url'=>'/domains'])
  @vLinks(['title'=>'Tracking','icon'=>'search-location fas'])
    @vLink(['title'=>'All Traffic','icon'=>'caret-right fas','url'=>'/traffic'])
    @vLinks(['title'=>'Traffic Sources','icon'=>'caret-right fas'])
      @vLink(['title'=>'Facebook','icon'=>'facebook fab','url'=>'/traffic/sources/facebook'])
      @vLink(['title'=>'Taboola','icon'=>'adversal fab','url'=>'/traffic/sources/taboola'])
      @vLink(['title'=>'System1','icon'=>'adversal fab','url'=>'/traffic/sources/system1'])
    @endvLinks  
  @endvLinks  
  @vLinks(['title'=>'Reporting','icon'=>'chart-line fas'])
    @if($isAdmin) 
      @vLink(['title'=>'Revenue/Spend','icon'=>'caret-right fas','url'=>'/reports/revenue'])
    @endif
    @vLink(['title'=>'Traffic Sources','icon'=>'caret-right fas','url'=>'/reports/traffic'])
    @vLink(['title'=>'Clicks','icon'=>'caret-right fas','url'=>'/reports/clicks'])
    @vLink(['title'=>'Leads','icon'=>'caret-right fas','url'=>'/reports/leads'])
  @endvLinks
  @if($isAdmin) 
    @vLink(['title'=>'Users & Permissions','icon'=>'users-cog fas','url'=>'/users'])
  @endif
</ul>
</nav>
</div>
</aside>