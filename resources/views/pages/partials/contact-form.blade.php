<div class="pt-lg">

	@include('layouts.partials.errors')

	<div class="submit-status"></div> <!-- submit status -->
	<form method="post" action="{{ route('contactform') }}" >
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			<label for="name">Your Name:</label>
			<input type="text"  name="name" id="name" value="{{ old('name') }}" class="form-control"
				   required minlength="3" maxlength="100">
		</div>
		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email">Your Email:</label>
			<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control"
				   required maxlength="254">
		</div>
		<div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
			<label for="message">Your Message:</label>
			<textarea name="message" id="message" class="form-control no-resize autosize"
					  required maxlength="5000">{{ old('message') }}</textarea>
		</div>
		<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response" />
		<input type="submit" value="Send Message" class="btn"><br>
		<small>* Your details will <a href="{{ route('privacy') }}">never be shared</a>.</small>
	</form>

</div>

@push('head')
	<script src='https://www.google.com/recaptcha/api.js?render={{ config('recaptcha.key') }}'></script>
@endpush

@if (session('sent'))
	@push('javascriptfrompages')
		$('.submit-status')
			.html('<span class="success"><i class="fa fa-check-circle"></i>Thank you. We will be in touch shortly.</span>')
			.fadeIn(300)
			.delay(10000)
			.fadeOut(3000);
	@endpush
@endif

@push('javascriptfrompages')
	grecaptcha.ready(function() {
		grecaptcha.execute('{{ config('recaptcha.key') }}', { action: 'contact_form' })
			.then(function(token) {
				document.getElementById("g-recaptcha-response").value = token;
			});
	});
@endpush