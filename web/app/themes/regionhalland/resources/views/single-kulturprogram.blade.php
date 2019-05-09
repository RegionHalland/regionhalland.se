@extends('layouts.app')

@section('content')
	<main>
		<div class="center rh-hero">
			<img class="rh-image-hero" src="{{ get_the_post_thumbnail_url() }}" alt="">
			<div class="rh-caption-hero">
				{{ get_the_title() }}
			</div>
		</div>

		<div class="center px4 pt3 pb4 rh-article" style="max-width: 1440px;">
			<div class="left-align">
				<div class="">
					@while(have_posts()) @php(the_post())
					<article class="clearfix">
						<div class="col col-12 md-col-9 pr4">
							<h1 class="">{{ get_the_title() }}</h1>
							<p>{{ the_content() }}</p>
							<p class="pt2">
							@include('partials.author-info')
							</p>
						</div>
						<div class="col col-12 md-col-3">
							<div class="" >
								<h2 class="h2" style="border-bottom: 2px solid #61A2D8;">Mer information</h2>
								<div class="mt2 pt2 pl2 pb2" style="border-left: 4px solid #61A2D8; background-color: #D0E3F3; border-bottom-left-radius: 5px; border-top-left-radius: 5px;">
									
									@php($programPublik = get_region_halland_acf_page_kulturprogram_publik())
									@if($programPublik)
										<p><strong>Publik:</strong> {{ $programPublik }}</p>
									@endif

									@php($programLangd = get_region_halland_acf_page_kulturprogram_langd())
									@if($programLangd)
										<p><strong>Längd:</strong> {{ $programLangd }}</p>
									@endif

									@php($programLokal = get_region_halland_acf_page_kulturprogram_lokal())
									@if($programLokal)
										<p><strong>Lokal:</strong> {{ $programLokal }}</p>
									@endif

									@php($programPeriod = get_region_halland_acf_page_kulturprogram_turne_period())
									@if($programPeriod)
										<p><strong>Turnéperiod:</strong> {{ $programPeriod }}</p>
									@endif

									@php($programPris = get_region_halland_acf_page_kulturprogram_pris())
									@if($programPris)
										<p><strong>Pris i Halland:</strong> {{ $programPris }}</p>
                                    @endif

                                    <p><strong>Typ:</strong>
                                        @php($arrLabels = get_region_halland_acf_page_kulturprogram_type_labels())
                                        @if(isset($arrLabels))
                                            @foreach ($arrLabels as $label)
                                                {{ $label['label'] }}@if ($loop->last) @else,@endif
                                            @endforeach
                                        @endif
								    </p>
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
