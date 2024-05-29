<ul>
    <li>
        <a class="nav-link" href="/">{{ $content['top-bar']['home'] ?? "home"}}</a>
    </li>
    <li class="has-submenu">
        <a class="nav-link" href="/sales">{{__('Sales')}}</a>
        <ul class="submenu">
            <li><a href="#">__</a></li>
            <li><a href="#">__</a></li>
        </ul>
    </li>
    <li class="has-submenu">
        <a class="nav-link" href="/products">{{__('Products')}}</a>
        <ul class="submenu">
            <li><a href="/products">{{__('Index')}}</a></li>
            <li><a href="/products/stock">{{__('Stock')}}</a></li>
            <li><a href="/products/machine/stock">{{__('Machine Stock')}}</a></li>
        </ul>
    </li>
    @haspermission('machines-manage')
        <li class="has-submenu">
            <a class="nav-link" href="javascript:void(0)">{{__('Machines')}}</a>
            <ul class="submenu">
                <li><a href="/machines">{{__('Index')}}</a></li>
                <li><a href="/machine/stock">{{__('Stock')}}</a></li>
                <li><a href="/machine/config">{{__('Config')}}</a></li>
                @can('machines-experiment')
                    <li><a href="/machine/testing-ground">{{__('Testing ground')}}</a></li>
                @endcan
            </ul>
        </li>
    @endhaspermission
    <li class="has-submenu">
        <a class="nav-link" href="javascript:void(0)">{{__('Depots')}}</a>
        <ul class="submenu">
            <li><a href="/depots">{{__('Index')}}</a></li>
            <li><a href="/depot/sales">{{__('Sales')}}</a></li>
            <li><a href="/depot/tickets">{{__('Tickets')}}</a></li>
            <li><a href="/depot/reviews">{{__('Reviews')}}</a></li>
            <li><a href="/depot/complaints">{{__('Complaints')}}</a></li>
        </ul>
    </li>
    <li class="has-submenu">
        <a class="nav-link" href="javascript:void(0)">{{__('Locations')}}</a>
        <ul class="submenu">
            <li><a href="/locations">{{__('Index')}}</a></li>

        </ul>
    </li>
    <li class="has-submenu">
        <a class="nav-link" href="/reports">{{__('Report')}}</a>
        <ul class="submenu">
            <li><a href="/report/revenue">{{__('Revenue')}}</a></li>
            <li><a href="/report/machine/sale">{{__('Sales per machine')}}</a></li>

        </ul>
    </li>
    @hasrole('developer')
    <li class="has-submenu">
        <a class="nav-link" href="/testing">{{__('Testing')}}</a>
        <ul class="submenu">
            <li><a href="/report/events/log">{{__('Events')}}</a></li>
            <li><a href="/report/error/log">{{__('Errors')}}</a></li>
        </ul>
    </li>
    @endhasrole
    {{--                        --}}

    {{--                        <li>--}}
    {{--                            <a class="nav-link" href="/products">Products</a>--}}
    {{--                        </li>--}}

    {{--                        <li>--}}
    {{--                            <a class="nav-link" href="/blog">Blog</a>--}}
    {{--                        </li>--}}

    {{--                        <li class="has-submenu">--}}
    {{--                            <a class="nav-link" href="javascript:void(0);">Shop</a>--}}

    {{--                            <ul class="submenu">--}}
    {{--                                <li><a href="/shop_catalog">Catalog</a></li>--}}
    {{--                                <li><a href="/product_single">Single Product</a></li>--}}
    {{--                                <li><a href="/cart/checkout">Cart & Checkout</a></li>--}}
    {{--                                <li><a href="/account">Account</a></li>--}}
    {{--                            </ul>--}}
    {{--                        </li>--}}

    <li>
        {{--                            <a class="nav-link active" href="/contact">Contact Us</a>--}}

    </li>

    {{--                        <li class="has-submenu">--}}
    {{--                            <a class="nav-link" href="javascript:void(0);">Elements</a>--}}

    {{--                            <ul class="submenu">--}}
    {{--                                <li><a href="/element/accordions">Accordion</a></li>--}}
    {{--                                <li><a href="/element/alerts">Alerts</a></li>--}}
    {{--                                <li><a href="/elements-counters">Counters</a></li>--}}
    {{--                                <li><a href="/elements-form">Forms</a></li>--}}
    {{--                                <li><a href="/elements-icons">IconList</a></li>--}}
    {{--                                <li><a href="/elements-info_tables">Tables</a></li>--}}
    {{--                                <li><a href="/elements-media_embeds">Media Embeds</a></li>--}}
    {{--                                <li><a href="/elements-pricing_tables">Pricing Tables</a></li>--}}
    {{--                                <li><a href="/elements-tabs">Tabs</a></li>--}}
    {{--                            </ul>--}}
    {{--                        </li>--}}
</ul>
