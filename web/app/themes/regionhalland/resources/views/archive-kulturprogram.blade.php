@extends('layouts.app')

@section('content')

<main class="center" id="main" style="max-width: 1440px;">
	<div class="left-align px4 pt3 pb2">
		<div class="">
			<div class="pb3 rh-label-previous">
				<span class="rh-label-previous-icon"></span>
				<p class="rh-label-previous-title">
					<a href="/kultur/kulturbarnunga/" style="color:black;">Kultur</a>
				</p>
			</div>
			<h1 class="pb2 rh-lists-title">Kulturprogram för barn och unga</h1>
			<div style="font-size: 1.2em; line-height: 1.4;" class="col-12 sm-col-8 md-col-8 lg-col-8">Förskola, skola och andra arrangörer kan köpa subventionerade kulturprogram för barn och unga 2-18 år, för skolföreställningar eller offentliga föreställningar i Halland</div>
			<p><a href="/kultur/kulturbarnunga/bokning-av-kulturprogram-for-barn-och-unga/">Så här bokar och redovisar du subventionerade kulturprogram för barn och unga</a></p>
			<p><a href="/kultur/kulturbarnunga/regionala-subventioner-till-kultur-for-barn-och-unga/">Läs mer om regionala subventioner till kultur för barn och unga</a></p>
			
			@php($myItems = get_region_halland_acf_page_kulturprogram_label_items())
			
			<ul class="rh-lists">
				@if($myItems['dans'])
					<h2 class="pb2 rh-lists-title">Dans</h2>
					@foreach($myItems['dans'] as $item)
						<li class="rh-lists-items">
							<p class="rh-lists-items-left"><a href="{{ $item['page']->url }}" style="color:black; text-decoration: none;">{{ $item['page']->post_title }}</a></p>
							{{--<p class="rh-lists-items-right"><strong>Målgrupp:</strong> {{ $item['page']->malgrupp }}</p>--}}
							<hr class="rh-lists-items-hr">
						</li>
					@endforeach
				@endif
				
				@if($myItems['film'])
					<h2 class="pb2 rh-lists-title">Film</h2>
					@foreach($myItems['film'] as $item)
						<li class="rh-lists-items">
							<p class="rh-lists-items-left"><a href="{{ $item['page']->url }}" style="color:black; text-decoration: none;">{{ $item['page']->post_title }}</a></p>
							{{--<p class="rh-lists-items-right"><strong>Målgrupp:</strong> {{ $item['page']->malgrupp }}</p>--}}
							<hr class="rh-lists-items-hr">
						</li>
					@endforeach
				@endif

				@if($myItems['konst'])
					<h2 class="pb2 rh-lists-title">Konst</h2>
					@foreach($myItems['konst'] as $item)
						<li class="rh-lists-items">
							<p class="rh-lists-items-left"><a href="{{ $item['page']->url }}" style="color:black; text-decoration: none;">{{ $item['page']->post_title }}</a></p>
							{{--<p class="rh-lists-items-right"><strong>Målgrupp:</strong> {{ $item['page']->malgrupp }}</p>--}}
							<hr class="rh-lists-items-hr">
						</li>
					@endforeach
				@endif

				@if($myItems['kulturarv'])
					<h2 class="pb2 rh-lists-title">Kulturarv</h2>
					@foreach($myItems['kulturarv'] as $item)
						<li class="rh-lists-items">
							<p class="rh-lists-items-left"><a href="{{ $item['page']->url }}" style="color:black; text-decoration: none;">{{ $item['page']->post_title }}</a></p>
							{{--<p class="rh-lists-items-right"><strong>Målgrupp:</strong> {{ $item['page']->malgrupp }}</p>--}}
							<hr class="rh-lists-items-hr">
						</li>
					@endforeach
				@endif

				@if($myItems['musik'])
					<h2 class="pb2 rh-lists-title">Musik</h2>
					@foreach($myItems['musik'] as $item)
						<li class="rh-lists-items">
							<p class="rh-lists-items-left"><a href="{{ $item['page']->url }}" style="color:black; text-decoration: none;">{{ $item['page']->post_title }}</a></p>
							{{--<p class="rh-lists-items-right"><strong>Målgrupp:</strong> {{ $item['page']->malgrupp }}</p>--}}
							<hr class="rh-lists-items-hr">
						</li>
					@endforeach
				@endif
					
				@if($myItems['slojd'])
					<h2 class="pb2 rh-lists-title">Slöjd</h2>
					@foreach($myItems['slojd'] as $item)
						<li class="rh-lists-items">
							<p class="rh-lists-items-left"><a href="{{ $item['page']->url }}" style="color:black; text-decoration: none;">{{ $item['page']->post_title }}</a></p>
							{{--<p class="rh-lists-items-right"><strong>Målgrupp:</strong> {{ $item['page']->malgrupp }}</p>--}}
							<hr class="rh-lists-items-hr">
						</li>
					@endforeach
				@endif

				@if($myItems['teater'])
					<h2 class="pb2 rh-lists-title">Teater</h2>
					@foreach($myItems['teater'] as $item)
						<li class="rh-lists-items">
							<p class="rh-lists-items-left"><a href="{{ $item['page']->url }}" style="color:black; text-decoration: none;">{{ $item['page']->post_title }}</a></p>
							{{--<p class="rh-lists-items-right"><strong>Målgrupp:</strong> {{ $item['page']->malgrupp }}</p>--}}
							<hr class="rh-lists-items-hr">
						</li>
					@endforeach
				@endif

				@if($myItems['litteratur'])
					<h2 class="pb2 rh-lists-title">Litteratur</h2>
					@foreach($myItems['litteratur'] as $item)
						<li class="rh-lists-items">
							<p class="rh-lists-items-left"><a href="{{ $item['page']->url }}" style="color:black; text-decoration: none;">{{ $item['page']->post_title }}</a></p>
							{{--<p class="rh-lists-items-right"><strong>Målgrupp:</strong> {{ $item['page']->malgrupp }}</p>--}}
							<hr class="rh-lists-items-hr">
						</li>
					@endforeach
				@endif

			</ul>
		</div>
	</div>
</main>

@endsection