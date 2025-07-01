<ul>
    <li>
        <a class="nav-link page_index" href="/">@c(['mimetype' => 'text/plain', 'key' => 'home', 'default' => 'Home'])</a>
    </li>

    <li class="has-submenu">
        <a class="nav-link" href="/sales">@c(['mimetype' => 'text/plain', 'key' => 'sales', 'default' => 'Sales'])</a>
        <ul class="submenu">
            <li><a href="#">__</a></li>
            <li><a href="#">__</a></li>
        </ul>
    </li>
    <li class="has-submenu">
        <a class="nav-link page_products" href="javascript:void(0)">@c(['mimetype' => 'text/plain', 'key' => 'products', 'default' => 'Products'])</a>
        <ul class="submenu">
            <li><a href="/products" class="page_products">@c(['mimetype' => 'text/plain', 'key' => 'index', 'default' => 'Index'])</a></li>
{{--            <li><a href="/products/stock">{{__('Stock')}}</a></li>--}}
{{--            <li><a href="/products/machine/stock">{{__('Machine Stock')}}</a></li>--}}
        </ul>
    </li>
    @haspermission('machines-manage')
        <li class="has-submenu">
            <a class="nav-link" href="javascript:void(0)">@c(['mimetype' => 'text/plain', 'key' => 'machines', 'default' => 'Machines'])</a>
            <ul class="submenu">
                <li><a href="/machines">@c(['mimetype' => 'text/plain', 'key' => 'index', 'default' => 'Index'])</a></li>
{{--                <li><a href="/machine/stock">{{__('Stock')}}</a></li>--}}
{{--                <li><a href="/machine/config">{{__('Config')}}</a></li>--}}
{{--                @can('machines-experiment')--}}
{{--                    <li><a href="/machine/testing-ground">{{__('Testing ground')}}</a></li>--}}
{{--                @endcan--}}
            </ul>
        </li>
    @endhaspermission
    <li class="has-submenu">
        <a class="nav-link page_outlets" href="javascript:void(0)">@c(['key' => 'outlets', 'default' => 'Outlets'])</a>
        <ul class="submenu">
            <li><a href="/outlets" class="page_outlets">@c(['key' => 'index', 'default' => 'Index'])</a></li>
            <li><a href="/outlet/sales" class="page_outlet_sales">@c(['key' => 'sales', 'default' => 'Sales'])</a></li>
            <li><a href="/outlet/tickets" class="page_outlet_tickets">@c(['key' => 'tickets', 'default' => 'Tickets'])</a></li>
            <li><a href="/outlet/reviews" class="page_outlet_reviews">@c(['key' => 'reviews', 'default' => 'Reviews'])</a></li>
            <li><a href="/outlet/complaints" class="page_outlet_complaints">@c(['key' => 'complaints', 'default' => 'Complaints'])</a></li>
        </ul>
    </li>
    <li class="has-submenu">
        <a class="nav-link page_locations" href="javascript:void(0)">@c(['key' => 'locations', 'default' => 'Locations'])</a>
        <ul class="submenu">
            <li><a href="/locations" class="page_locations">@c(['key' => 'index', 'default' => 'Index'])</a></li>

        </ul>
    </li>
    <li class="has-submenu">
        <a class="nav-link page_reports" href="javascript:void(0)">@c(['key' => 'reports', 'default' => 'Reports'])</a>
        <ul class="submenu">
            <li><a href="/report/revenue" class="page_report_revenue">@c(['key' => 'revenue', 'default' => 'Revenue'])</a></li>
            <li><a href="/report/machine/sale" class="page_report_machine_revenue">@c(['key' => 'sales', 'default' => 'Sales'])</a></li>

        </ul>
    </li>
    @hasrole('developer')
    <li class="has-submenu">
        <a class="nav-link page_developer" href="javascript:void(0)">@c(['key' => 'testing', 'default' => 'Testing'])</a>
        <ul class="submenu">
            <li>
                <form id="switchLanguage" action="/switch-menu" method="POST">
                    <input type="hidden" id="switch_language_csrf_token" name="_token" value="" />
                    <a href="#" class="nav-link switch_language_link" onclick="submitSwitchLanguage()">Switch</a>
                </form>
            </li>
            <li><a href="/report/event/log" class="page_developer_report_event_log">@c(['key' => 'events', 'default' => 'Events'])</a></li>
            <li><a href="/report/error/log" class="page_developer_report_error_log">@c(['key' => 'errors', 'default' => 'Errors'])</a></li>
            <li><a href="/tokenizer" class="page_developer_tokenizer">@c(['key' => 'tokenizer', 'default' => 'Tokenizer'])</a></li>
            <li><a href="/developer/settings" class="page_developer_setting">@c(['key' => 'settings', 'default' => 'Settings'])</a></li>
            <li><a href="/developer/machine/vending" class="page_developer_machine_vending">@c(['key' => 'vending machine', 'default' => 'Vending Machine'])</a></li>
        </ul>
    </li>
    @endhasrole
</ul>

