@extends('layouts.guest')
@section('title')
    {{$content[$page]['tab_title'] ?? 'tab_title'}}
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

@section('start-screen')
    {!! $content[$page]['start_screen'] ?? '' !!}
@endsection

@section('content')
    {!! $content[$page]['main'] ?? '' !!}
@stop

@section('footer')
    @include('partials.footer')
@stop

