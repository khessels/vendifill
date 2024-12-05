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

@endsection


@section('content')
    <main role="main">
        <div class="container">
            <div class="row">
                <div class="col-6-md">11</div>
                <div class="col-6-md">22</div>
            </div>
        </div>
    </main>
@stop

@section('footer')
{{--    @include('partials.footer')--}}
@stop
