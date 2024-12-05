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
    @c(['key' => 'hero', 'page' => $page, 'mimetype' => 'text/html', 'default' => '' ])
@endsection


@section('content')

    <main role="main">
        <section class="section">
            <div class="container">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        @livewire('location-index')
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        &nbsp;
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @livewire('map')
                    </div>
                </div>
            </div>
        </section>
    </main>

@stop

@section('footer')
{{--    @include('partials.footer')--}}
@stop
