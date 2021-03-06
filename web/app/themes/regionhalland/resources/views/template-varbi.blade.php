{{--
	Template Name: Lediga jobb via Varbi
--}}

@extends('layouts.app')

@section('content')

    <?php

    	$type = 1;
    	$mid = 0;
		$fid = 0;
		$gid = 0;

        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $type = 3;
        }

        if(isset($_GET["mid"])){
        	if ($_GET["mid"] != 0) {
	            $mid = $_GET["mid"];
	            $type = 2;
        	}
        }

        if(isset($_GET["fid"])){
        	if ($_GET["fid"] != 0) {
	            $fid = $_GET["fid"];
	            $type = 2;
        	}
        }

        if(isset($_GET["gid"])){
        	if ($_GET["fid"] != 0) {
	        	if ($_GET["gid"] != 0) {
	    		    $gid = $_GET["gid"];
	            	$type = 2;
	        	}
        	}
        }

    ?>


{{-- Container --}}
<div class="mx-auto clearfix" style="max-width: 1440px">
	<div>
		<div class="justify-between">

		{{-- Sidebar --}}
		<aside class="rh-xpad--left pt3 pb2 col col-12 sm-col-12 md-col-12 lg-col-3">
			@include('partials.nav-sidebar')
		</aside>
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
					
					@if($type == 1 || $type == 2)
						@include('partials.varbi_lista')
		            @endif
		            
		            @if($type == 3)
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
			@include('partials.content-nav')
			{{-- Content Navigation END --}}
		</aside>

		</div>
	</div>
</div>
{{-- Container END --}}
@endsection
