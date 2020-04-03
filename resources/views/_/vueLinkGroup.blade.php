<li class="nav-item has-treeivew">
  <a href="#" class="nav-link">
    @isset($icon) <i class="nav-icon fa-{{ $icon }}"></i> @endisset
    <p>{{ $title }} <i class="right fas fa-angle-left"></i></p>
  </a>
  <ul class="nav nav-treeview">
    {{ $slot }}
  </ul>
</li>