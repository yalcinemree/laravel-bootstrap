@if($users)
  	@foreach($users as $user)
    	<a href="users/{{{ $user['id'] }}}" class="list-group-item">{{{ $user['id'] }}} - {{ $user['name'] }}</a>
 	@endforeach
@endif