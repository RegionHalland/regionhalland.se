{{--
	Template Name: ABC-lista
--}}

@extends('layouts.app')

@section('content')

<main class="bg-white pt-16 pb-8" id="main">
	<div class="container mx-auto px-4">
		<div class="w-full mx-auto">
			<h1 class="mb-4">{!! get_the_title() !!}</h1>
			@php($myLinks = get_region_halland_acf_abc_page_links())	
			<?php var_dump($myLinks); ?>		


			@if (is_active_sidebar('sidebar-article-bottom'))
				@include('partials.sidebar-article-bottom')
			@endif
		</div>
	</div>
</main>

@endsection