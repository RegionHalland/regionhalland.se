@extends('layouts.app')

@section('content')

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
	
@endsection
