@extends('layouts.app')

@section('content')

{{-- Container --}}
<div class="mx-auto clearfix" style="max-width: 1440px">
	<div>
		<div class="justify-between">

		{{-- Sidebar --}}
		<aside class="rh-xpad--left pt3 pb2 col col-12 sm-col-12 md-col-12 lg-col-3">
			@include('partials.nav-sidebar')
		</aside>

		{{-- Main Content --}}
		<main class="pl3 pr2 pt3 pb1 col col-12 sm-col-12 md-col-12 lg-col-6" id="main">

			@while(have_posts()) @php(the_post())
				
				{{-- Title --}}
				<h1>{{ the_title() }}</h1>
				
				{{-- Content --}}
				@include('partials.article')
				
				{{-- HSA --}}
				@include('partials.contact-card-person')
				@include('partials.contact-card-enhet')
				
				{{-- Author --}}
				<div class="pt4">
					@include('partials.author-info')
				</div>
				
				{{-- Feedback --}}
				@include('partials.feedback')

			@endwhile

		</main>

		{{-- Content Navigation --}}
		<aside class="pt4 col col-12 sm-col-12 md-col-12 lg-col-3">
			@include('partials.content-nav')
		</aside>

		</div>
	</div>
</div>

@endsection