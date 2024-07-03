@extends('layouts.web')
@section('title')
    {{$content['welcome']['tab_title'] ?? 'tab_title'}}
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

@section('start-screen')
    {!! $content[$page]['start_screen'] ?? '' !!}
@endsection


@section('content')
    <main role="main">
        <section class="section">
            <div class="container">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="row">
                    <div class="col-md-2">
                        @can('locations-manage')
                            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#mdlAddLocation">
                                {{__('Add location')}}
                            </button>
                        @endcan
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @livewire('location-index')
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="modal modal-lg" id="mdlAddLocation" tabindex="-1">
        <div class="modal-dialog">
            <form method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{__('Add location')}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">{{__('Name')}}</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="{{__('name of location\company')}}">
                        </div>
                        <div class="form-group">
                            <label for="managed_by">{{__('Contact Name')}}</label>
                            <input type="text" class="form-control" id="managed_by" name="managed_by" placeholder="{{__('name of person at location')}}">
                        </div>
                        <div class="form-group">
                            <label for="contact_details">{{__('Contact Details')}}</label>
                            <input type="text" class="form-control" id="contact_details" name="contact_details" placeholder="{{__('contact details')}}">
                        </div>
                        <div class="form-group">
                            <label for="active">{{__('Active')}}</label>
                            <select class="form-control" id="active" name="active">
                                <option value="yes">{{__('Yes')}}</option>
                                <option value="no" selected>{{__('No')}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="coordinates">{{__('Coordinates')}}</label>
                            <input type="text" class="form-control" id="coordinates" name="coordinates" placeholder="{{__('lat, long')}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('footer')
{{--    @include('partials.footer')--}}
@stop
