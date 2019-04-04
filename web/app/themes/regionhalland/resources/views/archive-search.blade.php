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

            <?php $strSearchText = "";
                if(isset($_GET["q"])){
                    $strSearchText = $_GET["q"];
                }
            ?>

            <h1>Sök på Region Halland</h1>

            <form name="myForm" method="get" action="{!! env('FINDWISE_SEARCH_URL') !!}">
                <?php
                $strSearchText = "";
                if(isset($_GET["q"])){
                    $strSearchText = $_GET["q"];
                }
                ?>
                <div class="rh-search-field">
                    <input type="text" name="q" class="rh-search-term rh-search-term-larger" placeholder="Skriv din sökning här" value="<?=$strSearchText?>" aria-label="Sökruta">
                    <button type="submit" class="rh-search-button rh-search-button-larger">
                        Sök
                    </button>
                </div>
            </form>

            @if(isset($myData))

                <p class="pt3">Din sökning på <strong>'{{$strSearchText}}'</strong> gav {{ $numberOfHits }} träffar</p>

                <h2 class="mb1" style="border-bottom: 4px solid #378A30">Sökresultat - sida {{$currentPage}} av {{$numberOfPages}}</h2>

                @foreach ($myData['documentList']['documents'] as $data)
                    <p class="pt1">
                        <a class="h3" href="{{ $data['url'] }}">{!! $data['title'] !!}</a>
                    </p>
                    {{-- <span>{{ $data['content'] }}</span><br><br> --}}
                @endforeach

                <br><br>

                @if($arrFirst)
                    <a class="rh-pagination-link rh-pagination-link-previous" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['firstPage']['query']?>">Första sidan</a>
                @else
                    <span class="rh-pagination-link rh-pagination-link-previous">Första sidan</span>
                @endif


                @if($arrPrev)
                    <a class="rh-pagination-link rh-pagination-link-previous" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['previousPage']['query']?>">Föregående sida</a>
                @else
                    <span class="rh-pagination-link rh-pagination-link-previous">Föregående sida</span>
                @endif

                <span>
                    <span>&nbsp;</span>
                    @foreach ($myData['documentList']['pagination']['pages'] as $pages)
                        @if($pages['selected'] == 1)
                        <strong><a class="rh-pagination-link" style="background-color: #FCAF15;" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$pages['query']?>">{!! $pages['displayName'] !!}</a></strong>
                        @else
                        <span><a class="rh-pagination-link" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$pages['query']?>">{!! $pages['displayName'] !!}</a></span>
                        @endif
                    @endforeach
                    <span>&nbsp;</span>
                </span>

                @if($arrNext)
                    <a class="rh-pagination-link rh-pagination-link-next" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['nextPage']['query']?>">Nästa sida</a>
                @else
                    <span class="rh-pagination-link rh-pagination-link-next">Nästa sida</span>
                @endif

                @if($arrLast)
                    <a class="rh-pagination-link rh-pagination-link-next" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['lastPage']['query']?>">Sista sidan</a>
                    @else
                    <span class="rh-pagination-link rh-pagination-link-next">Sista sidan</span>
                @endif

            @else

                <p class="h2">Din sökning på <strong>'{{$strSearchText}}'</strong> gav tyvärr inga träffar</p>

            @endif

		</div>
		<div class="pt3 pb3 pl4 col col-12 sm-col-12 md-col-4 lg-col-2">
		&nbsp;
		</div>
	</div>
</main>

@endsection