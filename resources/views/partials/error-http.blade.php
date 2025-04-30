<section class=" block-banner-home1">
    <div class="position-relative z-1">
        <div class="d-flex align-items-center flex-column">
            @switch( $error_code)
                @case( 404)
                        @c(['key' => 'error.404.code', 'default' => '<h1 class="text-white">404</h1>'])
                        @c(['key' => 'error.404.message', 'default' => '<h5 class="text-white">Gezochte Pagina niet gevonden.</h5>'])
                        @c(['key' => 'error.404.description', 'default' => '<p class="text-md-medium neutral-300 text-center text-white">De Gezochte Pagina is niet beschikbaar. <br> Zoek opnieuw of selecteer een andere pagina.</p>'])
                    @break
                @default()
                    <h1 class="text-white">{{ $error_code }}</h1>
                    @break
            @endswitch
            <a href="/" class="btn btn-primary mt-30"><img src="/assets/imgs/template/icons/arrow-left.svg"> Terug naar de hoofd pagina</a>
            <img src="/assets/imgs/template/404.png" alt="Select Finance">
        </div>
    </div>
    <div class="bg-shape z-0"></div>
</section>
