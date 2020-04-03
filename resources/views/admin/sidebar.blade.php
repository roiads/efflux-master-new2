<aside class="main-sidebar">
  <a href="/admin/dashboard" class="brand-link">
    <span class="brand-text">Efflux<small>LLC</small></span>
  </a>
<div class="sidebar">
<nav>
<ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-accordion="false" data-widget="treeview">
  @vLink(['title'=>'Dashboard','icon'=>'tachometer-alt fas','url'=>'/dashboard'])
  @vLink(['title'=>'Accounts','icon'=>'id-card fas','url'=>'/accounts'])
  @vLinks(['title'=>'Campaigns','icon'=>'bullhorn fas'])
    @vLink(['title'=>'Campaign Manager','icon'=>'caret-right fas','url'=>'/campaigns'])
    @vLink(['title'=>'Ad Manager','icon'=>'caret-right fas','url'=>'/ads'])
    @vLink(['title'=>'Waffles','icon'=>'stroopwafel fas','url'=>'/rules'])
  @endvLinks 
  @vLinks(['title'=>'Site Manager','icon'=>'edit fas'])
    @vLink(['title'=>'Domains','icon'=>'caret-right fas','url'=>'/domains'])
    @vLink(['title'=>'Routes','icon'=>'caret-right fas','url'=>'/routes'])    
    @vLink(['title'=>'Categories','icon'=>'caret-right fas','url'=>'/categories'])
    @vLink(['title'=>'Pages','icon'=>'caret-right fas','url'=>'/pages'])
    @vLink(['title'=>'Posts','icon'=>'caret-right fas','url'=>'/posts'])
    @vLink(['title'=>'Images','icon'=>'caret-right fas','url'=>'/images'])
  @endvLinks
  @vLinks(['title'=>'Tracking','icon'=>'search-location fas'])
    @vLink(['title'=>'All Traffic','icon'=>'caret-right fas','url'=>'/traffic'])
    @vLinks(['title'=>'Traffic Sources','icon'=>'caret-right fas'])
      @vLink(['title'=>'Facebook','icon'=>'facebook fab','url'=>'/traffic/sources/facebook'])
      @vLink(['title'=>'Taboola','icon'=>'adversal fab','url'=>'/traffic/sources/taboola'])
      @vLink(['title'=>'System1','icon'=>'adversal fab','url'=>'/traffic/sources/system1'])
    @endvLinks  
  @endvLinks  
  @vLinks(['title'=>'Reporting','icon'=>'chart-line fas'])
    @vLink(['title'=>'Traffic Sources','icon'=>'caret-right fas','url'=>'/reports/traffic'])
    @vLink(['title'=>'Clicks','icon'=>'caret-right fas','url'=>'/reports/clicks'])
    @vLink(['title'=>'Leads','icon'=>'caret-right fas','url'=>'/reports/leads'])
  @endvLinks
  @if(auth()->user()->admin()) 
    @vLinks(['title'=>'Admin','icon'=>'unlock fas'])
      @vLink(['title'=>'Revenue/Spend','icon'=>'caret-right fas','url'=>'/reports/revenue'])
      @vLink(['title'=>'Payment Methods','icon'=>'caret-right fas','url'=>'/payments']) 
      @vLink(['title'=>'Users & Permissions','icon'=>'caret-right fas','url'=>'/users'])
    @endvLinks
  @endif
</ul>
</nav>
</div>
</aside>