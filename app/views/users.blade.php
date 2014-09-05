@include('header')

<div class="page-header">
    <h1>Müşteriler</h1>
</div>
<div class="row">
<div class="col-sm-4">
  <div class="list-group">
  	@foreach($users as $user)
    	<a href="users/{{{ $user['id'] }}}" class="list-group-item">{{{ $user['id'] }}} - {{ $user['name'] }}</a>
 	@endforeach
  </div>
</div><!-- /.col-sm-4 -->
</div>

@if(Session::get('message')) 
<div class="alert alert-success">
	{{ Session::get('message') }}
</div>
@endif

@if(Session::get('error'))
<div class="alert alert-warning">
	{{ Session::get('error') }}
</div>
@endif


@include('footer')