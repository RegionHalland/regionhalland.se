@extends('layouts.app')

@section('content')

<main class="center px4" id="main" style="max-width:1440px;">
	<div class="left-align px4">
        <h1 class="mb3">Sök på Region Halland</h1>

        <form name="myForm" method="get" action="{!! env('FINDWISE_SEARCH_URL') !!}">
            <?php
            $strSearchText = "";
            if(isset($_GET["q"])){
                $strSearchText = $_GET["q"];
            }
            ?>
            <div class="rh-search-field">
                <input type="text" name="q" class="rh-search-term rh-search-term-larger" placeholder="Skriv din sökning här" value="<?=$strSearchText?>" aria-label="Sökruta" style="max-width:60em;">
                <button type="submit" class="rh-search-button rh-search-button-larger" style="background-color: #378A30; color:white;">
                    Sök
                </button>
            </div>
        </form>
        <p class="pt3">Din sökning på <strong>'{{$strSearchText}}'</strong> gav {{ $numberOfHits }} träffar</p>
    </div>

    <div class="left-align clearfix">
		<div class="pt3 pb3 pl4 col col-12 sm-col-12 md-col-8 lg-col-8">
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


            @if(isset($myData))
                <h2 class="mb1" style="border-bottom: 4px solid #378A30">Sökresultat - sida {{$currentPage}} av {{$numberOfPages}}</h2>

                <ul>
                @foreach ($myData['documentList']['documents'] as $data)
                    <li class="py2">
                        <p><a class="h2" href="{{ $data['url'] }}" style="color: black; text-decoration: none;">{!! $data['title'] !!}</a></p>
                        <p>Senast ändrad: {!! $data['modified'] !!}</p>
                    </li>
                    {{-- <span>{{ $data['content'] }}</span><br><br> --}}
                    @if(function_exists('get_region_halland_breadcrumbs'))
                        <?php
                            getID($data['_id'])
                        ?>
                        @php($myBreadcrumbs = get_region_halland_breadcrumbs(getID($data['_id'])))
                        @if(isset($myBreadcrumbs))
                            @foreach ($myBreadcrumbs as $myBreadcrumb)
                                @if ($myBreadcrumb['url'])
                                    <a href="{{ $myBreadcrumb['url'] }}">{!! $myBreadcrumb['name'] !!}</a>
                                @else
                                    <span>{!! $myBreadcrumb['name'] !!}</span>
                                @endif
                            @endforeach
                        @endif
                    @endif
                @endforeach
                </ul>

                <div class="pt2">
                    @if($arrFirst)
                        <a class="rh-pagination-link rh-pagination-link-previous" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['firstPage']['query']?>">Första sidan</a>
                    @else
                        <span class="rh-pagination-link rh-pagination-link-previous">Första sidan</span>
                    @endif


                    @if($arrPrev)
                        <a class="rh-pagination-link" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['previousPage']['query']?>">Föregående sida</a>
                    @else
                        <span class="rh-pagination-link">Föregående sida</span>
                    @endif

                    @foreach ($myData['documentList']['pagination']['pages'] as $pages)
                        @if($pages['selected'] == 1)
                        <strong><a class="rh-pagination-link" style="background-color: #FCAF15;" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$pages['query']?>">{!! $pages['displayName'] !!}</a></strong>
                        @else
                        <span><a class="rh-pagination-link" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$pages['query']?>">{!! $pages['displayName'] !!}</a></span>
                        @endif
                    @endforeach

                    @if($arrNext)
                        <a class="rh-pagination-link" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['nextPage']['query']?>">Nästa sida</a>
                    @else
                        <span class="rh-pagination-link">Nästa sida</span>
                    @endif

                    @if($arrLast)
                        <a class="rh-pagination-link rh-pagination-link-next" href="{!! env('FINDWISE_SEARCH_URL') !!}/?<?=$myData['documentList']['pagination']['lastPage']['query']?>">Sista sidan</a>
                        @else
                        <span class="rh-pagination-link rh-pagination-link-next">Sista sidan</span>
                    @endif
                </div>

            @else

                <p class="h2">Din sökning på <strong>'{{$strSearchText}}'</strong> gav tyvärr inga träffar</p>

            @endif

		</div>
		<div class="pt3 pb3 pl2 pr4 col col-12 sm-col-12 md-col-4 lg-col-4">
            <h2 style="border-bottom: 4px solid #378A30">Söktips - Region Halland</h2>
            <div class="mt2 pt2 pl2 pb2" style="border-left: 4px solid #378A30; background-color: #C3DCC1; border-bottom-left-radius: 5px; border-top-left-radius: 5px;">
            <ul>
                <li>Se till att alla ord är rättstavade</li>
                <li>Försök att använda synonymer</li>
                <li>Försök med fler generella ord eller ta bort ett sökord</li>
            </ul>
            </div>
		</div>
	</div>
</main>

@endsection

<?php function getID($id) {
    $myID = "";
    $arrID = explode("_", $id);
    $myID = $arrID[1];
    return $myID;
}

?>