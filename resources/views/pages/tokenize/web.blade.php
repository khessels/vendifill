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

@endsection


@section('content')
    <main role="main">
        <!-- Common styles
        ================================================== -->

        <!-- start section -->
        <section class="section ">
            <div class="container">
                <div class="row justify-content-center">
                    @if( session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Tokenize Data
                            </div>
                            <div class="card-body">
                                @hasrole('developer')
                                <div class="row">
                                    <div class="col-6">
                                        <form method="POST" action="{{ url('/tokenize') }}">
                                            @csrf
                                            <div class="input-group">
                                                <label for="data">Data</label>
                                                <input type="text" name="data" class="form-control" placeholder="data">
                                            </div>
                                            <button class="btn btn-warning btn-sm" type="submit">Tokenize</button>
                                            @if(!empty( Session::get('token')))
                                                <div class="input-group">
                                                    <label for="token">Token</label>
                                                    <input type="text" name="token" class="form-control disabled"
                                                           value="{{ Session::get('token') ?? "" }}">
                                                </div>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Retrieve data from token
                            </div>
                            <div class="card-body">
                                @hasrole('developer')
                                <div class="row">
                                    <div class="col-6">
                                        <form role="form" method="GET" action="{{ url('/tokenize') }}">
                                            @csrf
                                            <div class="input-group">
                                                <label for="data">Token</label>
                                                <input type="text" name="data" class="form-control" placeholder="data"
                                                       value="{{ Session::get('token') ?? "" }}">
                                            </div>
                                            <button class="btn btn-warning btn-sm" type="submit">Exchange token for data</button>
                                            @if(!empty(Session::get('token_data')))
                                                <div class="input-group">
                                                    <label for="token">Data</label>
                                                    <input type="text" name="token" class="form-control disabled"
                                                           value="{{ Session::get('token_data') ?? "" }}">
                                                </div>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Add Card
                            </div>
                            <div class="card-body">
                                @hasrole('developer')
                                <div class="row">
                                    <div class="col-6">
                                        <form role="form" method="POST" action="{{ url('/tokenize/card') }}">
                                            @csrf
                                            <div class="input-group">
                                                <label for="run_mode">Run Mode</label>
                                                <select name="run_mode" class="form-control">
                                                    <option value="TESTING" selected>Testing</option>
                                                    <option value="PRODUCTION">Production</option>
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <label for="cc_name">Name</label>
                                                <input type="text" name="cc_name" class="form-control"
                                                       placeholder="Joe smith">
                                            </div>
                                            <div class="input-group">
                                                <label for="cc_number">CC Number</label>
                                                <input type="text" name="cc_number" class="form-control"
                                                       placeholder="1111-2222-3333-4444">
                                            </div>
                                            <div class="input-group">
                                                <label for="cc_month">Month</label>
                                                <input type="text" name="cc_month" class="form-control"
                                                       placeholder="08">
                                            </div>
                                            <div class="input-group">
                                                <label for="cc_year">Year</label>
                                                <input type="text" name="cc_year" class="form-control" placeholder="23">
                                            </div>
                                            <div class="input-group">
                                                <label for="cc_ccv">CCV</label>
                                                <input type="text" name="cc_ccv" class="form-control" placeholder="123">
                                            </div>
                                            <div class="input-group">
                                                <label for="card">Card</label>
                                                <select name="card">
                                                    <option selected value="VISA">VISA</option>
                                                    <option value="MASTER">MASTER</option>
                                                    <option value="AMEX">AMEX</option>
                                                    <option value="DINERS">DINERS</option>
                                                    <option value="DISCOVERY">DISCOVERY</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-warning btn-sm" type="submit">Store & Tokenize
                                            </button>

                                            @if(Session::has('add_card'))
                                                {{json_encode(Session::get('add_card'), true)}}
                                            @elseif(Session::has('add_card_errors'))
                                                @foreach(Session::get('add_card_errors') as $error)
                                                    <p>{{$error}}</p>
                                                @endforeach
                                            @endif
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Retrieve Card
                            </div>
                            <div class="card-body">
                                @hasrole('developer')
                                <div class="row">
                                    <div class="col-6">
                                        <form role="form" method="GET" action="{{ url('/tokenize/card') }}">
                                            @csrf
                                            <div class="input-group">
                                                <label for="token">Name</label>
                                                <input type="text" name="token" class="form-control"
                                                       placeholder="Token">
                                            </div>
                                            <button class="btn btn-warning btn-sm" type="submit">Get card</button>

                                            @if(Session::has('get_card'))
                                                {{json_encode(Session::get('get_card'), true)}}
                                            @elseif(Session::has('get_card_errors'))
                                                @foreach(Session::get('get_card_errors') as $error)
                                                    <p>{{$error}}</p>
                                                @endforeach
                                            @endif
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@stop

@section('footer')
    @include('partials.footer')
@stop
