@extends('layouts.master')

@section('content')

    <div class="page-header">
	    <h1>Müşteriler</h1>
	</div>
	<div class="row">
	<div class="col-sm-4">
	  <div class="list-group">
	  	@if($users)
		  	@foreach($users as $user)
		    	<a href="users/{{{ $user['id'] }}}" class="list-group-item">{{{ $user['id'] }}} - {{ $user['name'] }}</a>
		 	@endforeach
	 	@endif
	  </div>
	</div><!-- /.col-sm-4 -->
	</div>
	
	@include('messages')

@stop

