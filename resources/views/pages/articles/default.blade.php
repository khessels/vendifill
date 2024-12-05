@extends('layouts.guest')

@section('title')
    @c(['key' => 'title', 'page' => $page])
@endsection

@section('head')
    @include('partials.guest.head')
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
    @c(['key' => 'content', 'page' => $page, 'mimetype' => 'text/html', 'default' => '' ])
@stop

@section('footer')
    @include('partials.footer')
@stop

