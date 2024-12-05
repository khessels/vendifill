@extends('layouts.web')
@section('title')
    @c(['key' => 'title', 'page' => $page])
@endsection

@section('head')
    @include('partials.web.head')
@endsection

@section('head-css')
@endsection

@section('head-scripts')
@endsection


@section('top-bar')
    @include('partials.top-bar')
@endsection

@section('side-menu')
    @include('partials.side-menu')
@endsection

@section('hero')
    <main role="main">
        <!-- Common styles
        ================================================== -->

        <!-- start section -->
        <section class="section ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                @c(['key' => 'role related'])
                            </div>
                            <div class="card-body">
                                @haspermission('switch-role')
                                    <button id='toggle-role-switcher' data-value="{{$roleSwitcher ?? ""}}" type="button" class="btn btn-light btn-lg">
                                        @c(['key' => 'role switcher', 'page' => $page])
                                        @if(!empty($roleSwitcher))
                                            <span class="badge badge-warning">@c(['key' => 'enabled'])</span>
                                        @else
                                            <span class="badge badge-secondary">@c(['key' => 'disabled'])</span>
                                        @endif
                                    </button>
                                @endhaspermission
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
    </main>
    <!-- end main -->
@endsection


@section('content')


@stop

