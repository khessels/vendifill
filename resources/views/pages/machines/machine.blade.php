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
                        @can('machines-manage')
                            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#mdlAddMachine">
                                {{__('Add machine')}}
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
                        @livewire('machine-index')
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="modal modal-lg" id="mdlAddMachine">
        <div class="modal-dialog ">
            <form method="post">
                @csrf
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add machine</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="location_id">{{__('Location')}}</label>
                            <select class="form-control" id="location_id" name="location_id">
                                @foreach($locations as $location)
                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('Coordinates')}}</label>
                            <input type="text" class="form-control" id="coordinates" name="coordinates" placeholder="{{__('coordinates of the machine')}}">
                        </div>
                        <div class="form-group">
                            <label for="machine_type">{{__('Machine Type')}}</label>
                            <select class="form-control" id="machine_type_id" name="machine_type_id">
                                @foreach($machine_types as $machineType)
                                    <option value="{{$machineType->id}}">{{$machineType->machine_type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="brand">{{__('Brand')}}</label>
                            <input type="text" class="form-control" id="brand" name="brand" placeholder="{{__('machine brand')}}">
                        </div>
                        <div class="form-group">
                            <label for="brand_model">{{__('Brand Model')}}</label>
                            <input type="text" class="form-control" id="brand_model" name="brand_model" placeholder="{{__('machine model')}}">
                        </div>
                        <div class="form-group">
                            <label for="year">{{__('Model year')}}</label>
                            <input type="text" class="form-control" id="year" name="year" placeholder="{{__('Model year')}}">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@stop
