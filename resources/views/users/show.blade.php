{{-- codigo anterior con header y footer--}}
{{-- @include('header')
	
	
	<div class="row mt-3">
		<div class="col-8">
			<h1 class="mt-5">Usuario {{ $id }} </h1>
	
				Mostrando detalles del usuario: {{ $id }}"
		</div>
		<div class="col-4">
			@include('sidebar')
		</div>
	</div>
	

@include('footer') --}}


{{-- Codigo del Layout --}}
@extends('layout')

@section('title', "Usuario {$id}")	

@section('content')
	<h1 class="mt-5">Usuario {{ $id }} </h1>
	
		Mostrando detalles del usuario: {{ $id }}"
@endsection