@extends('layout')

@section('title', "Usuarios")			

@section('content')	
	
	<h1 class="mt-5">{{ $title }} </h1>
	
			<hr/>
		
			<ul>

				@forelse($users as $user)
						<li>{{ $user }} </li>

				@empty
					<p>No hay usuarios registrados</p>
				@endforelse
		
			</ul>

@endsection

@section('sidebar')
	@parent

	<h2 class="mt-5">Barra lateral personalizada</h2>
@endsection