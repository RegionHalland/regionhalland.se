{{--
	Template Name: I-frame sida
--}}

@extends('layouts.app')

@section('content')
	
<main class="center bg-white px4 pb4 pt3 " id="main" style="max-width: 1440px;">
	<div style="height:700px;width:100%;background-color:white;">
		<div class="left-align container mx-auto px-4">
			<div class="col col-12 sm-col-12 md-col-12 lg-col-1">
				&nbsp;
			</div>
			<div class="col col-12 sm-col-12 md-col-12 lg-col-10">
				@php($myLink = get_region_halland_acf_page_i_frame_link())
				<iframe width="100%" height="700px;" src="{{$myLink}}"></iframe> 
			</div>
			<div class="col col-12 sm-col-12 md-col-12 lg-col-1">
				&nbsp;
			</div>
		</div>
	</div>
</main>

@endsection