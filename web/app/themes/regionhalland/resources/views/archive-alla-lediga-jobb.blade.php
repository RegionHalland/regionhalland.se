@extends('layouts.app')

@section('content')

	<main>
		<div class="center px3" id="main" style="max-width:1440px;">
			<div class="left-align pt3">
				<h1 class="mb3">Lediga jobb</h1>
				@php($myVarbi = get_region_halland_varbi_works(1, 0))
				@if(isset($myVarbi))
					<ul>
					@foreach ($myVarbi as $varbi)
						<li class="pl3 pt2 pb1 mt2" style="background-color:#F4F4F4; max-width:40em;">
							<h2><a href="ett-ledigt-jobb/?id={{ $varbi['id'] }}" style="text-decoration: none; color:black;">{{ $varbi['title'] }}</a></h2>
							<p><strong>Ort:</strong> {{ $varbi['town'] }}</p>
							<p><strong>Anställningsform:</strong> {{ $varbi['type'] }}, {{ $varbi['working_hours'] }}</p>
							<p><strong>Publicerad:</strong> {{ $varbi['published'] }}</p>
							<p class="pb2"><strong>Sista ansökningsdag:</strong> {{ $varbi['lastday'] }}</p>
						</li>
					@endforeach
					</ul>
	            @endif
	            <br><br><br>
			</div>
		</div>
	</main>

@endsection
