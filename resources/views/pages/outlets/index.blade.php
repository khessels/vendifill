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
                            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#mdlAddOutlet">
                                {{__('Add outlet')}}
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
                        @livewire('outlet-index')
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
    <div class="modal modal-lg" id="mdlAddOutlet">
        <div class="modal-dialog ">
            <form method="post">
                @csrf
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">@c(['key' => 'add outlet'])</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">@c(['key' => 'name'])</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="@c(['key' => 'name of the location'])">
                        </div>
                        <div class="form-group">
                            <label for="contact">@c(['key' => 'contact'])</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="@c(['key' => 'contact details'])">
                        </div>
                        <div class="form-group">
                            <label for="country_code">@c(['key' => 'country code'])</label>
                            <select class="form-control" id="country_code" name="country_code">
                                <option value="506" selected>@c(['key' => 'costa rica'])</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">@c(['key' => 'coordinates'])</label>
                            <input type="text" class="form-control" id="coordinates" name="coordinates" placeholder="@c(['key' => 'coordinates of the location'])">
                        </div>
                        <div class="form-group">
                            <label for="outlet_type">@c(['key' => 'outlet type'])</label>
                            <select class="form-control" id="outlet_type_id" name="outlet_type_id">
                                @foreach($outlet_types as $outletType)
                                    <option value="{{$outletType->id}}">{{$outletType->outlet_type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country_code">@c(['key' => 'active'])</label>
                            <select class="form-control" id="active" name="active">
                                <option value="YES" selected>@c(['key' => 'yes'])</option>
                                <option value="NO">@c(['key' => 'no'])</option>
                            </select>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@c(['key' => 'close'])</button>
                        <button type="submit" class="btn btn-primary">@c(['key' => 'save changes'])</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@stop
