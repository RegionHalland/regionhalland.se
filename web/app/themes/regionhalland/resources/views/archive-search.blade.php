@extends('layouts.app')

@section('content')

<main class="center px4" id="main" style="max-width: 1440px;">
	<div class="left-align clearfix">
		<div class="pt3 pb3 pl4 col col-12 sm-col-12 md-col-4 lg-col-2">
		</div>
		<div class="pt3 pb3 pl4 col col-12 sm-col-12 md-col-4 lg-col-8">
			@php($myData = get_region_halland_search_findwise_region_halland())

			@php($numberOfHits = $myData['documentList']['numberOfHits'])

			@php($query = $myData['query'])

			@php($hitsPerPage = $myData['documentList']['pagination']['hitsPerPage'])

			@php($currentPage = 1+$myData['documentList']['pagination']['offset']/$hitsPerPage)

			@php($numberOfPages = ceil($numberOfHits/$hitsPerPage))

			@php($arrFirst = $myData['documentList']['pagination']['firstPage'])

			@php($arrPrev = $myData['documentList']['pagination']['previousPage'])

			@php($arrNext = $myData['documentList']['pagination']['nextPage'])

			@php($arrLast = $myData['documentList']['pagination']['lastPage'])

            @if(isset($myData))
                <h1>Sök på Region Halland</h1>
                <p class="pt3">Din sökning gav {{ $numberOfHits }} träffar</p>

                <h2 style="border-bottom: 4px solid #378A30">Sökresultat</h2>

                <span>sidan {{$currentPage}} av {{$numberOfPages}}</span><br><br>

                @foreach ($myData['documentList']['documents'] as $data)
                    <span><a href="{{ $data['url'] }}">{!! $data['title'] !!}</a></span><br>
                    {{-- <span>{{ $data['content'] }}</span><br><br> --}}
                @endforeach

                <br><br>

                @if($arrFirst)
                    <span style="color:red;"><a class="rh-pagination-link rh-pagination-link-previous" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['firstPage']['query']?>">Första sidan</a></span>
                @endif


                @if($arrPrev)
                    <span style="color:red;"><a class="rh-pagination-link rh-pagination-link-previous" href="http://stage-demo.local/search/?<?=$myData['documentList']['pagination']['previousPage']['query']?>">Föregående sida</a></span>
                @endif

                <span>
                    <span>&nbsp;</span>
                    @foreach ($myData['documentList']['pagination']['pages'] as $pages)
                        @if($pages['selected'] == 1)
                        <span style="color:red;font-weight:bold;"><a class="rh-pagination-link" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$pages['query']?>">{!! $pages['displayName'] !!}</a></span>
                        @else
                        <span><a class="rh-pagination-link" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$pages['query']?>">{!! $pages['displayName'] !!}</a></span>
                        @endif
                    @endforeach
                    <span>&nbsp;</span>
                </span>

                @if($arrNext)
                    <span style="color:red;"><a class="rh-pagination-link rh-pagination-link-next" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['nextPage']['query']?>">Nästa sida</a></span>
                @endif

                @if($arrLast)
                    <span style="color:red;"><a class="rh-pagination-link rh-pagination-link-next" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['lastPage']['query']?>">Sista sidan</a></span>
                @endif

            @else

                <p class="h2">Din sökning gav tyvärr inga träffar</p>

            @endif

		</div>
		<div class="pt3 pb3 pl4 col col-12 sm-col-12 md-col-4 lg-col-2">
		&nbsp;
		</div>
	</div>
</main>

@endsection