@c(['key' => 'menu-guest' ,'default' => '
    <ul>
        <li>
            <a class="nav-link page_index" href="/">Home</a>
        </li>
        <li>
            <a href="/about-us" class="page_about_us">About us</a>
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
        <li style="display: none;" id="switchLanguageMenu">
            <form id="switchLanguage" action="/switch-menu" method="POST">
                <input type="hidden" id="switch_language_csrf_token" name="_token" value="" />
                <a href="#" class="nav-link switch_language_link">Switch</a>
            </form>
        </li>
        <li>
            <a class="nav-link page_contact" href="/contact">Contact Us</a>
        </li>
    </ul>
'])


@auth
    <script>
         $(document).ready(function() {
            $('#switchLanguageMenu').show()
        });
    </script>
@endauth
