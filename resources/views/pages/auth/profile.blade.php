@extends('layouts.web')
@section('title')
    {{$content[$page]['tab_title'] ?? 'tab_title'}}
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
    {!! $content[$page]['start_screen'] ?? '' !!}
@endsection

@section('content')
    {!! $content[$page]['main'] ?? '' !!}
@endsection


{{--@section('footer')--}}
{{--    @include('partials.footer')--}}
{{--@endsection--}}
