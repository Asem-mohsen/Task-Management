<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
    
    <span class="menu-link">
        <span class="menu-icon">
            <i class="ki-duotone ki-address-book fs-2">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
            </i>
        </span>
        <span class="menu-title">
            {{ $label }}
        </span>
        <span class="menu-arrow"></span>
    </span>

    <div class="menu-sub menu-sub-accordion" kt-hidden-height="250" style="display: none; overflow: hidden;">

        @foreach ($items as $item)
            <div class="menu-item">
                <a class="menu-link" href="{{$item['link']}}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">
                        {{ $item['label'] }}
                    </span>
                </a>
            </div>
        @endforeach

    </div>

</div>