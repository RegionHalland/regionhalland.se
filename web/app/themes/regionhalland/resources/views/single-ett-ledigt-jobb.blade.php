@extends('layouts.app')

@section('content')
	
	<?php
		$intVarbiID = 0;
		if(isset($_GET["id"])){
			$intVarbiID = $_GET["id"];
		}
	?>

	<main>
		<div class="center px3" id="main" style="max-width:1440px;">
			<div class="left-align pt3">
				@php($myVarbi = get_region_halland_varbi_works(2, $intVarbiID))
				@if(isset($myVarbi))
					<h1 class="pb3">{{ $myVarbi['title'] }}</h1>
					<p><strong>Ort:</strong> {{ $myVarbi['town'] }}</p>
					<p><strong>Anställningsform:</strong> {{ $myVarbi['type'] }}, {{ $myVarbi['working_hours'] }}</p>
					<p><strong>Publicerad:</strong> {{ $myVarbi['published'] }}</p>
					<p class="pb2"><strong>Sista ansökningsdag:</strong> {{ $myVarbi['lastday'] }}</p>
					<a href="{{ $myVarbi['applyURI'] }}"><button class="rh-button rh-button--secondary" role="button">Sök tjänsten</button></a>
					<div class="py3" style="max-width: 55em;">{!! $myVarbi['description'] !!}</div>
				@endif

			</div>
		</div>
	</main>

@endsection
