@extends('layouts.app')

@section('content')

{{-- Container --}}
<div class="mx-auto clearfix" style="max-width: 1440px">
	<div>
		<div class="{{ isset($nav_sidebar) && !empty($nav_sidebar) ? 'justify-start' : 'justify-between' }}">

		{{-- Sidebar --}}
		@if(function_exists('get_region_halland_nav_sidebar'))
			@php($nav_sidebar = get_region_halland_nav_sidebar())
			@if(isset($nav_sidebar) && !empty($nav_sidebar))
				<aside class="pl3 pt3 pb2 col col-12 sm-col-12 md-col-12 lg-col-3">
					{{-- Sidebar Navigation --}}
					@include('partials.nav-sidebar')
					{{-- Sidebar Navigation END--}}
				</aside>
			@endif
		@endif
		{{-- Sidebar END --}}

		{{-- Main Content --}}
		<main class="pl3 pr2 pt3 pb1 col col-12 sm-col-12 md-col-12 lg-col-6" id="main">
			@while(have_posts()) @php(the_post())
				
				<h1>{{ the_title() }}</h1>
				
				{{-- Content --}}
				@if(function_exists('get_region_halland_prepare_the_content'))
					@php(get_region_halland_prepare_the_content())
				@endif
				<article class="rh-article">
					<p><strong>{{ get_region_halland_acf_page_ingress() }}</strong></p>
					{!! the_content() !!}
				</article>
				{{-- Content END --}}

				{{-- HSA --}}
				@php($myPerson = get_region_halland_acf_page_personer_enheter_person())
				@php($myEnhet = get_region_halland_acf_page_personer_enheter_enhet())
				{{ $myPerson }}<br>
				{{ $myEnhet }}
				<br><br>
				
				@php($myPersonData = get_region_halland_personer_enheter(1, $myPerson, ""))
    			<?php var_dump($myPersonData); ?>
				
				<br><br>

				@php($myEnhetData = get_region_halland_personer_enheter(2, "", $myEnhet))
    			<?php var_dump($myEnhetData); ?>

				{{-- HSA END --}}
				
				{{-- Author --}}
				<div class="pt4">
					@include('partials.author-info')
				</div>
				{{-- Author END --}}

			@endwhile

		</main>
		{{-- Main Content END --}}

		<aside class="pt4 col col-12 sm-col-12 md-col-12 lg-col-3">
			{{-- Content Navigation --}}
			@include('partials.content-nav')
			{{-- Content Navigation END --}}
		</aside>

		</div>
	</div>
</div>
{{-- Container END --}}
@endsection
