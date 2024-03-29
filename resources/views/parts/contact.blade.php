@extends('layout')
@section('content')

@if(Session::has('message'))
<div class='alert-contact-message'>{{Session::get('message')}}</div>
@endif
@if (count($errors) > 0)
    <div class="alert-contact-message">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div id="map"></div>
    <div class="col-md-8 col-md-offset-2 contact-form">
        <div class="well well-sm">
            <form class="form-horizontal" method="post" action="send-email" id="contactForm" data-toggle="validator" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <legend class="text-center header">Contact us</legend>

                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center hide-icon"><i class="fa fa-user bigicon"></i></span>
                        <div class="col-md-8">
                            <input id="fname" name="first_name" type="text" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center hide-icon"><i class="fa fa-user bigicon"></i></span>
                        <div class="col-md-8">
                            <input id="lname" name="last_name" type="text" placeholder="Last Name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center hide-icon"><i class="fa fa-envelope-o bigicon"></i></span>
                        <div class="col-md-8">
                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center hide-icon"><i class="fa fa-phone-square bigicon"></i></span>
                        <div class="col-md-8">
                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center hide-icon"><i class="fa fa-pencil-square-o bigicon"></i></span>
                        <div class="col-md-8">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg" id="sendContact">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
@endsection