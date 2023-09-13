<li class="pl-4">
    @if ($url = is_string($item) ? $item : $item->url)
        {{-- Menu item with URL--}}
        <a href="{{ $page->url($url) }}"
            class="nav-menu__item {{ 'lvl' . $level }} {{ $page->isActiveParent($item) ? 'lvl'.$level.'-active' : '' }} {{ $page->isActive($url) ? 'lvl'.$level.'-active active text-blue-500' : '' }} hover:text-blue-500"
        >
            {{ $label }}
        </a>
    @else
        {{-- Menu item without URL--}}
        <p class="nav-menu__item {{ 'lvl' . $level }} {{ $page->isActiveParent($item) ? 'lvl' . $level . '-active' : '' }} hover:text-blue-500 ">{{ $label }}</p>
    @endif

    @if (! is_string($item) && $item->children)
        {{-- Recursively handle children --}}
        @include('_nav.menu', ['items' => $item->children, 'level' => ++$level])
    @endif
</li>
