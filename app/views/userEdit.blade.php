@extends('layouts.master')

@section('content')

	<form role="form" name="userEdit" method="POST">
	  <div class="form-group">
	    <label>Adı</label>
	    <input type="name" class="form-control" name="name" placeholder="Adı" value="{{{ $userInfo['name'] }}}">
	  </div>
	  <div class="form-group">
	    <label>Soyadı</label>
	    <input type="name" class="form-control" name="surname" placeholder="Soyadı" value="{{{ $userInfo['surname'] }}}">
	  </div>
	  <div class="form-group">
	    <label>Email</label>
	    <input type="email" class="form-control" name="email" placeholder="Email" value="{{{ $userInfo['email'] }}}">
	  </div>	  
	  <button type="submit" class="btn btn-default">Güncelle</button>
	</form>

	<p>	@include('messages') </p>

@stop