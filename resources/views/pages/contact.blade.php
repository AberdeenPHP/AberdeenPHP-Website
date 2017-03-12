@extends('layouts.main')

@section('content')

<div class="container contact">
    <h2 class="text-center">Contact Us</h2>
    <div class="row">
        <div class="col-md-6">
            <p>Get in touch with us anytime.</p>
            <p>You can use the form here or any of these methods:<br>
            <ul class="list-unstyled">
                <li><a href="https://twitter.com/AberdeenPhp" target="_blank"><i class="fa fa-twitter fa-2x"></i> Twitter: @AberdeenPHP</a></li>
                <li><a href="https://www.facebook.com/aberdeenpug/" target="_blank"><i class="fa fa-facebook fa-2x"></i> Facebook: AberdeenPUG</a></li>
                <li><a href="mailto:{{ config('site.contactEmailAddress') }}"><i class="fa fa-envelope fa-2x"></i> Email: {{ config('site.contactEmailAddress') }}</a></li>
            </ul>
        </div>
        <div class="col-md-6">
            @include('pages.partials.contact-form')
        </div>
      
    </div>
</div>

@endsection

