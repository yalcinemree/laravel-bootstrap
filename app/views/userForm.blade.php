@extends('layouts.master')

@section('content')


	<form role="form" name="userForm" method="POST">
	  <div class="form-group">
	    <label>Adı</label>
	    <input type="name" class="form-control" name="name" placeholder="Adı" value="{{{ Input::old('name') }}}">
	  </div>
	  <div class="form-group">
	    <label>Soyadı</label>
	    <input type="name" class="form-control" name="surname" placeholder="Soyadı" value="{{{ Input::old('surname') }}}">
	  </div>
	  <div class="form-group">
	    <label>Email</label>
	    <input type="email" class="form-control" name="email" placeholder="Email" value="{{{ Input::old('email') }}}">
	  </div>
	  <button type="submit" class="btn btn-default">Kaydet</button>
	</form>   

	<p>	@include('messages') </p>

@stop