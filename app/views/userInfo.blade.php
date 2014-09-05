@extends('layouts.master')

@section('content')

	<div class="page-header">
		<h1>Müşteri Bilgileri</h1>
	</div>
	<div class="row">
		<div class="col-sm-4">
			  <ul class="list-group">
			    <li class="list-group-item">{{{ $userInfo['name'] }}}</li>
			    <li class="list-group-item">{{ $userInfo['surname'] }}</li>
			    <li class="list-group-item">{{ $userInfo['email'] }}</li>
			  </ul>
		</div><!-- /.col-sm-4 -->    
	</div>

	<a class="btn btn-warning" role="button" href="/emre/public/users/{{{ $userInfo['id'] }}}/edit">Güncelle</a>
	<a class="btn btn-danger" role="button" href="/emre/public/users/{{{ $userInfo['id'] }}}/delete">Sil</a>     

@stop
