@if( Session::has('primary'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('primary') }}
    </div>
@endif
@if( !empty($success))
    <div class="alert alert-success" role="alert">
        {{ $success }}
    </div>

@endif
@if( Session::has('secondary'))
    <div class="alert alert-secondary" role="alert">
        {{ Session::get('secondary') }}
    </div>
@endif

@if( session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

@if( Session::has('danger'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('danger') }}
    </div>
@endif

@if( Session::has('warning'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('warnin') }}
    </div>
@endif
@if( Session::has('info'))
    <div class="alert alert-info" role="alert">
        {{ Session::get('info') }}
    </div>
@endif
@if( Session::has('light'))
    <div class="alert alert-light" role="alert">
        {{ Session::get('light') }}
    </div>
@endif
@if( Session::has('dark'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('dark') }}
    </div>
@endif
