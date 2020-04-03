<aside class="main-sidebar">
  <a href="/admin/dashboard" class="brand-link">
    <span class="brand-text">EFFLUX<small>LLC</small></span>
  </a>
<div class="sidebar">
<nav>
<ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-accordion="false" data-widget="treeview">
  @vLink(['title'=>'Dashboard','icon'=>'clipboard-data','url'=>'/dashboard'])
  @vLink(['title'=>'Accounts','icon'=>'person-lines-fill','url'=>'/accounts'])
  @vLinks(['title'=>'Campaigns','icon'=>'briefcase'])
    @vLink(['title'=>'Campaign Manager','icon'=>'chevron-compact-right','url'=>'/campaigns'])
    @vLink(['title'=>'Ad Manager','icon'=>'chevron-compact-right','url'=>'/ads'])
    @vLink(['title'=>'Waffles','icon'=>'columns-gap','url'=>'/rules'])
  @endvLinks 
  @vLinks(['title'=>'Site Manager','icon'=>'tools'])
    @vLink(['title'=>'Domains','icon'=>'chevron-compact-right','url'=>'/domains'])
    @vLink(['title'=>'Routes','icon'=>'chevron-compact-right','url'=>'/routes'])    
    @vLink(['title'=>'Categories','icon'=>'chevron-compact-right','url'=>'/categories'])
    @vLink(['title'=>'Pages','icon'=>'chevron-compact-right','url'=>'/pages'])
    @vLink(['title'=>'Posts','icon'=>'chevron-compact-right','url'=>'/posts'])
    @vLink(['title'=>'Images','icon'=>'chevron-compact-right','url'=>'/images'])
  @endvLinks
  @vLinks(['title'=>'Tracking','icon'=>'geo'])
    @vLink(['title'=>'All Traffic','icon'=>'chevron-compact-right','url'=>'/traffic'])
    @vLinks(['title'=>'Traffic Sources','icon'=>'chevron-compact-right'])
      @vLink(['title'=>'Facebook','icon'=>'facebook fab','url'=>'/traffic/sources/facebook'])
      @vLink(['title'=>'Taboola','icon'=>'adversal fab','url'=>'/traffic/sources/taboola'])
      @vLink(['title'=>'System1','icon'=>'adversal fab','url'=>'/traffic/sources/system1'])
    @endvLinks  
  @endvLinks  
  @vLinks(['title'=>'Reporting','icon'=>'table'])
    @vLink(['title'=>'Traffic Sources','icon'=>'chevron-compact-right','url'=>'/reports/traffic'])
    @vLink(['title'=>'Clicks','icon'=>'chevron-compact-right','url'=>'/reports/clicks'])
    @vLink(['title'=>'Leads','icon'=>'chevron-compact-right','url'=>'/reports/leads'])
  @endvLinks
  @if(auth()->user()->admin()) 
    @vLinks(['title'=>'Admin','icon'=>'shield-lock-fill'])
      @vLink(['title'=>'Revenue/Spend','icon'=>'chevron-compact-right','url'=>'/reports/revenue'])
      @vLink(['title'=>'Payment Methods','icon'=>'chevron-compact-right','url'=>'/payments']) 
      @vLink(['title'=>'Users & Permissions','icon'=>'chevron-compact-right','url'=>'/users'])
    @endvLinks
  @endif
</ul>
</nav>
</div>
</aside>