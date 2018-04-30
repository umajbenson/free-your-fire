@if(Session::has('message') && !is_array(Session::get('message')))
    <div>
        <small>{{ Session::get('message') }}</small>
    </div>
@endif

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if(Session::has('status'))
    <div class="messages">
        <small>{{ Session::get('status') }}</small>
    </div>
@endif