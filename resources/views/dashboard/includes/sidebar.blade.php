<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item">
                <a href="#">
                    <i class="la la-cog"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ trans('admin/sidebar.settings') }}</span>
                    <span class="badge badge badge-danger  badge-pill float-right mr-2">0</span>
                </a>
                <ul class="menu-content">
                    <li class="active">
                        <a class="menu-item" href="#" data-i18n="nav.dash.ecommerce">{{ __('admin/sidebar.ShippingMethods') }}</a>
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="{{ route('edit.shipping.methods','free') }}">{{ trans('admin/sidebar.FreeShipping') }}</a>
                            </li>
                            <li>
                                <a class="menu-item" href="{{ route('edit.shipping.methods','local') }}">{{ trans('admin/sidebar.LocalShipping') }}</a>
                            </li>
                            <li>
                                <a class="menu-item" href="{{ route('edit.shipping.methods','outer') }}">{{ trans('admin/sidebar.OuterShipping') }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
