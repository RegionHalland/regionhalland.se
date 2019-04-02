@extends('layouts.app')

@section('content')
<main>
	<div class="center rh-hero">
		<img class="rh-image-hero" src="{{ get_the_post_thumbnail_url() }}" alt="">
		<div class="rh-caption-hero">
			<h5 class="rh-caption-hero-title">
				{{ get_region_halland_acf_page_kulturarrangemang_start_tid_dag() }}
				{{ get_region_halland_acf_page_kulturarrangemang_start_tid_manad() }}
				{{ $post->post_title }}
			</h5>
		</div>
	</div>

	<div class="center px4 pt3 pb4" style="max-width: 1440px;">
		<div class="left-align">
			<div class="">
				@while(have_posts()) @php(the_post())
					<article class="clearfix">
						<div class="col col-12 md-col-9 pr4">
							<h1 class="">{{ $post->post_title }}</h1>
							{{ get_region_halland_acf_page_kulturarrangemang_ingress() }}
							<p>{{ the_content() }}</p>
							@include('partials.author-info')
						</div>
						<div class="col col-12 md-col-3">
							<div class="" >
								<h2 class="h2" style="border-bottom: 2px solid #61A2D8;">Mer information</h2>
								<div class="mt2 pt2 pl2 pb2" style="border-left: 4px solid #61A2D8; background-color: #D0E3F3; border-bottom-left-radius: 5px; border-top-left-radius: 5px;">

									<p><strong>Kategori:</strong>
                                        @php($arrLabels = get_region_halland_acf_page_kulturarrangemang_subcategory_labels())
                                        @if(isset($arrLabels))
                                            @foreach ($arrLabels as $label)
                                                {{ $label['label'] }},
                                            @endforeach
                                        @endif
								    </p>

								    @php($kulturTid = get_region_halland_acf_page_kulturarrangemang_tid())
								    @if($kulturTid)
										<p><strong>Tid:</strong> {{ $kulturTid }}</p>
									@endif
									
									@php($kulturPlats = get_region_halland_acf_page_kulturarrangemang_plats())
								    @if($kulturPlats)
										<p><strong>Plats:</strong> {!! $kulturPlats !!}</p>
									@endif
									
									@php($kulturSista = get_region_halland_acf_page_kulturarrangemang_sista_anmalningstid()) 
									@if($kulturSista)
										<p><strong>Sista anmälningsdag:</strong> {{ $kulturSista }}</p>
									@endif
									
									@php($kulturMalgrupp = get_region_halland_acf_page_kulturarrangemang_malgrupp())
									@if($kulturMalgrupp)
										<p><strong>Målgrupp:</strong> {{ $kulturMalgrupp }}</p>
									@endif
									
									@php($kulturEntre = get_region_halland_acf_page_kulturarrangemang_entre())
									@if($kulturEntre)
										<p><strong>Entrè:</strong> {!! $kulturEntre !!}</p>
									@endif

								</div>
							</div>
						</div>

					</article>
				@endwhile
			</div>

		</div>
	</div>
</main>
@endsection
