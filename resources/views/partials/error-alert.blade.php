@if( Session::has('alert-message'))
    @switch( Session::get('alert-class', 'alert-primary'))
        @case( 'alert-primary')
            <script>
                toastr.info('{{ Session::get('alert-message') }}')
            </script>

{{--            <div class="alert alert-primary d-flex align-items-center alert-dismissible fade show" role="alert">--}}
{{--                <svg height="26px" class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>--}}
{{--                <div>--}}
{{--                    {{ Session::get('alert-message') }}--}}
{{--                </div>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--            </div>--}}
            @break
        @case( 'alert-success')
            <script>
                toastr.success('{{ Session::get('alert-message') }}')
            </script>
{{--            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">--}}
{{--                <svg height="26px" class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>--}}
{{--                <div>--}}
{{--                    {{ Session::get('alert-message') }}--}}
{{--                </div>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--            </div>--}}
            @break
        @case( 'alert-warning')
            <script>
                toastr.warning('{{ Session::get('alert-message') }}')
            </script>
{{--            <div class="alert alert-warning d-flex align-items-center alert-dismissible fade show" role="alert">--}}
{{--                <svg height="26px" class="bi flex-shrink-0 me-2" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>--}}
{{--                <div>--}}
{{--                    {{ Session::get('alert-message') }}--}}
{{--                </div>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--            </div>--}}
            @break
        @case( 'alert-danger')
            <script>
                toastr.error('{{ Session::get('alert-message') }}')
            </script>
{{--            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">--}}
{{--                <svg height="26px" class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>--}}
{{--                <div>--}}
{{--                    {{ Session::get('alert-message') }}--}}
{{--                </div>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--            </div>--}}
            @break
    @endswitch
{{--    <script>--}}
{{--        if( parseInt({{ Session::get('alert-timeout') }}) !== 0) {--}}
{{--            setTimeout(function () {--}}
{{--                const alertPanel = new bootstrap.Alert('div.alert')--}}
{{--                alertPanel.close();--}}
{{--            }, parseInt({{ Session::get('alert-timeout') }}));--}}
{{--        }--}}
{{--    </script>--}}
@endif
