@extends('layout')
	

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