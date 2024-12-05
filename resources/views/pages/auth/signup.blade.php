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

@section('hero')
    {!! $content[$page]['start_screen'] ?? '' !!}
@endsection

@section('content')
    <main role="main">
        <section class="section" style="min-height: 280px;">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="card" style="font-size:150%">
                            <img src="/img/gallery_img/9.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sign up for location bonuses.</h5>
                                <p class="card-text">You can give us a location that has no vending machines but would be a great place to have one</p>
                                <p class="card-text">If VendiFill comes to an agreement with the location manager, we pay you a $50 finders fee.</p>
                                <p class="card-text">Of course, there are some rules but basically it has to be save for our machines and generate income.</p>
                                <a href="/signup/location-bonus" class="btn btn-primary btn-lg">Interested ? Click here!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="font-size:150%">
                            <img src="/img/products-cards_img/1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">You manage a location and are interested in our services.</h5>
                                <p class="card-text">If you meet the requirements, we will place a machine at your location to offer our services to your customers\employees free of charge.</p>
                                <p class="card-text">Our refill services assures your machines are always stocked with the most wanted products for your location.</p>
                                <form action="/signup" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="company_name" class="form-label">Company name</label>
                                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Your Company">
                                            </div>
                                            <div class="mb-3">
                                                <label for="company_size" class="form-label">Company size</label>
                                                <input type="number" class="form-control" id="company_size" name="company_size" placeholder="Number of Employees">
                                            </div>
                                            <p class="card-text">In order to understand the profitability of your location we need to know how many people pass the location (on a daily base) you want us to place the machine(s).</p>
                                            <div class="mb-3">
                                                <label for="people_passing_daily" class="form-label">Daily Number of people passing the location</label>
                                                <input type="number" class="form-control" id="people_passing_daily" name="people_passing_daily" placeholder="Daily Number of People passing">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="contact_name" class="form-label">Your name</label>
                                                <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Your Name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="contact_details" class="form-label">Contact details</label>
                                                <textarea class="form-control" id="contact_details" name="contact_details" placeholder="How can we contact you?">
                                                </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="message" class="form-label">Your Message</label>
                                                <textarea rows="5" class="form-control" id="message" name="message" placeholder="Your message">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <button type="submit" class="btn-primary btn btn-lg">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
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

