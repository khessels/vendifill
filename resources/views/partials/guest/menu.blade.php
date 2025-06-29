@auth
    @c(['key' => 'menu-guest-auth' ,'default' => '
        <ul>
            <li>
                <a class="nav-link" href="/">Home</a>
            </li>
            <li>
                <a href="/about-us">About us</a>
            </li>
            <li class="has-submenu">
                <a class="nav-link" href="/services">Services</a>
                <ul class="submenu">
                    <li><a href="/services/machines">Looking for a machine</a></li>
                    <li><a href="/services/refill">Refill service</a></li>
                    <li><a href="/services/products">Products</a></li>
                </ul>
            </li>
            <li>
                <a href="/article/request">Article request</a>
            </li>
            <li>
                <a href="/faqs">faq</a>
            </li>
            <li>
                <form id="switchLanguage" action="/switch-menu" method="POST">
                    <input type="hidden" id="switch_language_csrf_token" name="_token" value="" />
                    <a href="#" id="switch_language_link" class="nav-link" onclick="submitSwitchLanguage()">Switch</a>
                </form>
            </li>
            <li>
                <a class="nav-link active" href="/contact">Contact Us</a>
            </li>
        </ul>'])

    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        $('#switch_language_csrf_token').val( csrfToken);
        function submitSwitchLanguage() {
            document.getElementById( 'switchLanguage').submit();
        }
    </script>
@else
    @c(['key' => 'menu-guest' ,'default' => '
        <ul>
            <li>
                <a class="nav-link" href="/">Home</a>
            </li>
            <li>
                <a href="/about-us">About us</a>
            </li>
            <li class="has-submenu">
                <a class="nav-link" href="/services">Services</a>
                <ul class="submenu">
                    <li><a href="/services/machines">Looking for a machine</a></li>
                    <li><a href="/services/refill">Refill service</a></li>
                    <li><a href="/services/products">Products</a></li>
                </ul>
            </li>
            <li>
                <a href="/article/request">Article request</a>
            </li>
            <li>
                <a href="/faqs">faq</a>
            </li>

    {{--        <li>--}}
    {{--            <a class="nav-link" href="/products">Products</a>--}}
    {{--        </li>--}}

    {{--        <li>--}}
    {{--            <a class="nav-link" href="/blog">Blog</a>--}}
    {{--        </li>--}}

    {{--        <li class="has-submenu">--}}
    {{--            <a class="nav-link" href="javascript:void(0);">Shop</a>--}}
    {{--            <ul class="submenu">--}}
    {{--                <li><a href="/shop_catalog">Catalog</a></li>--}}
    {{--                <li><a href="/product_single">Single Product</a></li>--}}
    {{--                <li><a href="/cart/checkout">Cart & Checkout</a></li>--}}
    {{--                <li><a href="/account">Account</a></li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
            <li>
                <a class="nav-link active" href="/contact">Contact Us</a>
            </li>

        </ul>'])

@endauth

