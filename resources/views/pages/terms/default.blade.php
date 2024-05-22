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

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('top-bar')
    @include('partials.top-bar')
@endsection

@section('side-menu')
    @include('partials.side-menu')
@endsection

@section('start-screen')
    <!-- start hero -->
    {!! $content[$page]['start_screen'] ?? '' !!}
@endsection


@section('content')
    <main role="main">
    {!! $content[$page]['main'] ?? 'main' !!}
    </main>
@stop

