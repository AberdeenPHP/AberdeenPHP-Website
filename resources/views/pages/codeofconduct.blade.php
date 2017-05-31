@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <h2>Code of Conduct</h2>
            <p>All attendees, speakers, sponsors and volunteers are bound by the following code of conduct.</p>
            <p>We expect cooperation from all participants to provide a safe and welcoming environment for all involved.</p>
            <p>Need Help?</p>
            <p>Enquiries and complaints of any type should be sent to either of these:</p>
            <p>
            Email: <a href="mailto:{{ config('site.contactEmailAddress') }}">{{ config('site.contactEmailAddress') }}</a><br><br>
            Twitter: <a href="{{ config('site.ourTwitterUrl') }}">{{ config('site.ourTwitterHandle') }}</a><br><br>
            Danny Wilson: <a href="{{ config('site.dannyContactUrl') }}">{{ config('site.dannyContactHandle') }}</a></p>
            <p>Organizers of AberdeenPHP are dedicated to providing a harassment-free experience for everyone, regardless of gender, age, sexual orientation, disability, physical appearance, body size, race, or religion (or lack thereof). We do not tolerate harassment of meetup participants in any form. Sexual language and imagery is not appropriate for any meetup venue, including talks, workshops, parties, Twitter and other online media. User group&nbsp;participants violating these rules may be asked to leave.</p>
            <p>We expect participants to follow these rules at event venues and AberdeenPHP related social events.</p>
            <hr>
            <p>&nbsp;</p>
            <p>Our Code of Conduct was derived from <a href="http://confcodeofconduct.com">confcodeofconduct.com</a><br>
            License: Creative Commons Attribution 3.0 Unported License</p>


        </div>
    </div>
</div>

@endsection
