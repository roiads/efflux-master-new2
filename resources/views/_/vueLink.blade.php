<li class="nav-item">
  <router-link tag="a" to="{{ $url }}" class="nav-link h5">
    @isset($icon) <b-icon icon="{{ $icon }}" variant="gray" class="mr-2"></b-icon> @endisset
    <p>{{ $title }}</p>
  </router-link>
</li>