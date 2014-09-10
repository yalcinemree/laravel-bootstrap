@extends('layouts.master')

@section('content')
	@include('message.messages')

	

    <div class="page-header">
	    <h1>Müşteriler</h1>
	</div>

	<div class="row">
		<form class="navbar-form navbar-left" role="search" id="search-form">
			  <div class="form-group"> 
			    <input name="search-text" type="text" class="form-control" placeholder="Search">
			  </div>
			  <button id="formOneBtn" type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	
	<div class="row">
	<div class="col-sm-4">
	  <div id="formOneResults" class="list-group">
	  	@include('ajax.search')
	  </div>
	</div><!-- /.col-sm-4 -->
	</div>

	<div class="loader">Loading...</div>

@stop

