<div class="pt-md">
	
		 <div class="submit-status"></div> <!-- submit status -->
		  <form method="post" action="{{ route('contactform') }}" >
		  		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            <div class="form-group">
	            	<label for="name">Your Name:</label>
	            	<input type="text" required="required" value="{{ old('name') }}" name="name" id="name" class="form-control" >
	            </div>
	            <div class="form-group">
	            	<label for="email">Your Email:</label>
	            	<input type="email" required="required" value="{{ old('email') }}" name="email" id="email"  class="form-control">
	            </div>
	           
	            <div class="form-group">
	            	<label for="message">Your Message:</label>
	            	<textarea name="message" required="required" id="message" class="form-control" >{{ old('message') }}</textarea>
	            </div>
	            <input type="submit" value="Send Message" class="btn">
	      </form>

</div>

@push('pagescripts')
	var queryDict = {};
	location.search.substr(1).split("&").forEach(function(item) {queryDict[item.split("=")[0]] = item.split("=")[1]});
	if (queryDict['sent']){
		$('.submit-status').html('<span class="success"><i class="fa fa-check-circle"></i>Thank you. I will be in touch shortly.</span>').fadeIn(300).delay(10000).fadeOut(3000);
	}
@endpush