<li class="nav-item has-treeivew">
  <a href="#" class="nav-link h5">
    @isset($icon) <b-icon icon="{{ $icon }}" variant="gray" class="mr-2"></b-icon> @endisset
    <p>{{ $title }} <b-icon icon="chevron-compact-down" variant="gray"></b-icon> </p>
  </a>
  <ul class="nav nav-treeview">
    {{ $slot }}
  </ul>
</li>