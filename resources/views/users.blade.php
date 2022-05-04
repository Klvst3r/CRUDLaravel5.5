@include('header')
	
	
	<div class="row mt-3">
		<div class="col-8">
			<h1 class="mt-5">{{ $title }} </h1>
	
			<hr/>
		
			<ul>

				@forelse($users as $user)
						<li>{{ $user }} </li>

				@empty
					<p>No hay usuarios registrados</p>
				@endforelse
		
			</ul>
		</div>
		<div class="col-4">

			<h2 class="mt-5">Barra lateral</h2>
		</div>
	</div>
	

@include('footer')