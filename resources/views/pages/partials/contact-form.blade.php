<div class="pt-lg">

	@include('layouts.partials.errors')
	
	<div class="submit-status"></div> <!-- submit status -->
	<form method="post" action="{{ route('contactform') }}" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			<label for="name">Your Name:</label>
			<input type="text" required="required" value="{{ old('name') }}" name="name" id="name" class="form-control" >
		</div>
		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email">Your Email:</label>
			<input type="email" required="required" value="{{ old('email') }}" name="email" id="email"  class="form-control">
		</div>

		<div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
			<label for="message">Your Message:</label>
			<textarea name="message" required="required" id="message" class="form-control" >{{ old('message') }}</textarea>
		</div>
		<input type="submit" value="Send Message" class="btn"><Br>
		<small>* Your details will never be shared.</small>
	</form>

</div>

@push('javascriptfrompages')
    var queryDict = {};
    location.search.substr(1).split("&").forEach(function(item) {queryDict[item.split("=")[0]] = item.split("=")[1]});
    if (queryDict['sent']){
    	$('.submit-status').html('<span class="success"><i class="fa fa-check-circle"></i>Thank you. We will be in touch shortly.</span>').fadeIn(300).delay(10000).fadeOut(3000);
    }
@endpush