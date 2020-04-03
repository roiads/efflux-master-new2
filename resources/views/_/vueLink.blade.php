<li class="nav-item">
  <router-link tag="a" to="{{ $url }}" class="nav-link">
    @isset($icon) <i class="fa-{{ $icon }} nav-icon"></i> @endisset
    <p>{{ $title }}</p>
  </router-link>
</li>