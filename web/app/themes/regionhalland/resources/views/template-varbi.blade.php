{{--
	Template Name: Lediga jobb via Varbi
--}}

@extends('layouts.app')

@section('content')

    <?php

        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $type = 2;
        } else {
            $type = 1;
        }

    ?>


{{-- Container --}}
<div class="mx-auto clearfix" style="max-width: 1440px">
	<div>
		<div class="{{ isset($nav_sidebar) && !empty($nav_sidebar) ? 'justify-start' : 'justify-between' }}">

		{{-- Sidebar --}}
		@if(function_exists('get_region_halland_nav_sidebar'))
			@php($nav_sidebar = get_region_halland_nav_sidebar())
			@if(isset($nav_sidebar) && !empty($nav_sidebar))
				<aside class="rh-xpad--left pt3 pb2 col col-12 sm-col-12 md-col-12 lg-col-3">
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

				{{-- HSA END --}}
				<div class="left-align pt0">
					
					@if($type == 1)
						@include('partials.varbi_lista')
		            @endif
		            
		            @if($type == 2)
						@include('partials.varbi_enskild')
		            @endif
		            
		            <br><br><br>
				
				</div>

				{{-- Author --}}
				<div class="pt4">
					@include('partials.author-info')
				</div>
				{{-- Author END --}}
				@include('partials.feedback')

			@endwhile

		</main>
		{{-- Main Content END --}}

		<aside class="pt4 col col-12 sm-col-12 md-col-12 lg-col-3">
			{{-- Content Navigation --}}
			<p>
				<a href="https://regionhalland.varbi.com/se/what:login/">
					<button class="rh-button rh-button--secondary" aria-label="Logga in på Varbi-plattformen för att söka jobb" role="button">Logga in</button>
				</a>
			</p>
			<p>
				<a href="https://regionhalland.varbi.com/se/what:subscribeform/backToJobs:1/?token=70117c353fde97237ec4b71a130d841b">
					<button class="rh-button rh-button--secondary" aria-label="Prenumerera på jobbannonser från Region Halland via Varbi-plattformen" role="button">Prenumerera</button>
				</a>
			</p>
			@include('partials.content-nav')
			{{-- Content Navigation END --}}
		</aside>

		</div>
	</div>
</div>
{{-- Container END --}}
@endsection
