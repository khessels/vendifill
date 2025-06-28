<ul>
    <li>
        <a class="nav-link" href="/">@c(['key' => 'home', 'default' => 'Home'])</a>
    </li>

    <li class="has-submenu">
        <a class="nav-link" href="/sales">@c(['key' => 'sales', 'default' => 'Sales'])</a>
        <ul class="submenu">
            <li><a href="#">__</a></li>
            <li><a href="#">__</a></li>
        </ul>
    </li>
    <li class="has-submenu">
        <a class="nav-link" href="/products">@c(['key' => 'products', 'default' => 'Products'])</a>
        <ul class="submenu">
            <li><a href="/products">@c(['key' => 'index', 'default' => 'Index'])</a></li>
{{--            <li><a href="/products/stock">{{__('Stock')}}</a></li>--}}
{{--            <li><a href="/products/machine/stock">{{__('Machine Stock')}}</a></li>--}}
        </ul>
    </li>
    @haspermission('machines-manage')
        <li class="has-submenu">
            <a class="nav-link" href="javascript:void(0)">@c(['key' => 'machines', 'default' => 'Machines'])</a>
            <ul class="submenu">
                <li><a href="/machines">@c(['key' => 'index', 'default' => 'Index'])</a></li>
{{--                <li><a href="/machine/stock">{{__('Stock')}}</a></li>--}}
{{--                <li><a href="/machine/config">{{__('Config')}}</a></li>--}}
{{--                @can('machines-experiment')--}}
{{--                    <li><a href="/machine/testing-ground">{{__('Testing ground')}}</a></li>--}}
{{--                @endcan--}}
            </ul>
        </li>
    @endhaspermission
    <li class="has-submenu">
        <a class="nav-link" href="/outlets">>@c(['key' => 'outlets', 'default' => 'Outlets'])</a>
        <ul class="submenu">
            <li><a href="/outlets">@c(['key' => 'index', 'default' => 'Index'])</a></li>
            <li><a href="/outlet/sales">@c(['key' => 'sales', 'default' => 'Sales'])</a></li>
            <li><a href="/outlet/tickets">@c(['key' => 'tickets', 'default' => 'Tickets'])</a></li>
            <li><a href="/outlet/reviews">@c(['key' => 'reviews', 'default' => 'Reviews'])</a></li>
            <li><a href="/outlet/complaints">@c(['key' => 'complaints', 'default' => 'Complaints'])</a></li>
        </ul>
    </li>
    <li class="has-submenu">
        <a class="nav-link" href="javascript:void(0)">@c(['key' => 'locations', 'default' => 'Locations'])</a>
        <ul class="submenu">
            <li><a href="/locations">@c(['key' => 'index', 'default' => 'Index'])</a></li>

        </ul>
    </li>
    <li class="has-submenu">
        <a class="nav-link" href="/reports">@c(['key' => 'reports', 'default' => 'Reports'])</a>
        <ul class="submenu">
            <li><a href="/report/revenue">@c(['key' => 'revenue', 'default' => 'Revenue'])</a></li>
            <li><a href="/report/machine/sale">@c(['key' => 'sales', 'default' => 'Sales'])</a></li>

        </ul>
    </li>
    @hasrole('developer')
    <li class="has-submenu">
        <a class="nav-link" href="/developer">{{__('Testing')}}</a>
        <ul class="submenu">
            <li>
                <form id="switchLanguage" action="/switch-menu" method="POST">
                    @csrf
                    <a href="#" class="nav-link" onclick="submitSwitchLanguage()">@c(['key' => 'switch_menu', 'default' => 'Switch Menu'])</a>
                </form>
            </li>
            <li><a href="/report/events/log">{{__('Events')}}</a></li>
            <li><a href="/report/error/log">{{__('Errors')}}</a></li>
            <li><a href="/tokenizer">{{__('Tokenizer')}}</a></li>
            <li><a href="/developer/settings">{{__('Settings')}}</a></li>
            <li><a href="/developer/machine/vending">{{__('Vending machine')}}</a></li>
        </ul>
    </li>
    @endhasrole
</ul>
<script>
     function submitSwitchLanguage() {
        document.getElementById('switchLanguage').submit();
    }
</script>
