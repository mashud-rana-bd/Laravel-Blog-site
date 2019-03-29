@if(Session::has('message'))
	<p class="alert {{ Session::get('alert-class', 'bg-info') }}">{{ Session::get('message') }}</p>
@endif