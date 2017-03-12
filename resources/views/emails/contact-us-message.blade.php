@component('mail::message')
#Contact Us Message

@component('mail::panel')
##Name: 
{{ $request->name }}

##Email:
{{ $request->email }}

##Message:
{{ $request->message }}
@endcomponent


@endcomponent