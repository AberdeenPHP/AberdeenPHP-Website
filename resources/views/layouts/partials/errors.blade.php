 @if (count($errors))
     <div class="alert alert-danger text-left margin-bottom alert-important">
            <h5 class="padding-bottom">Sorry - something went wrong when you tried to send your message:</h5>  
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif