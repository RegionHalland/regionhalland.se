@php($myVarbi = get_region_halland_varbi_works(1, 0))
@if(isset($myVarbi))
@php($myPagination = get_region_halland_array_pagination(count($myVarbi),5,'sida'))
<?php var_dump($myPagination) ?>
@php($i = $myPagination['start_item'])
	<span><h2 class="mb1" style="border-bottom: 4px solid #378A30">{{ $myPagination['antal_items'] }} lediga jobb - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2></span>
	<ul>
	<?php while ($i < $myPagination['end_item']) { ?>
		<li class="pl3 pt2 pb1 mt2" style="background-color:#F4F4F4; max-width:40em;">
			<h2><a href="./?id={{ $myVarbi[$i]['id'] }}" style="text-decoration: none; color:black;">{{ $myVarbi[$i]['title'] }}</a></h2>
			<p><strong>Ort:</strong> {{ $myVarbi[$i]['town'] }}</p>
			<p><strong>Anställningsform:</strong> {{ $myVarbi[$i]['type'] }}, {{ $myVarbi[$i]['working_hours'] }}</p>
			<p><strong>Publicerad:</strong> {{ $myVarbi[$i]['published'] }}</p>
			<p class="pb2"><strong>Sista ansökningsdag:</strong> {{ $myVarbi[$i]['lastday'] }}</p>
		</li>
		<?php 
			$i++;
			if ($i >= $myPagination['antal_items']) {
				break;
			} 
		}		 
	?>
	</ul>
	<br><br>
	<div>
		<span><a class="rh-pagination-link rh-pagination-link-previous" style="line-height: 3;" href="./?sida={{ $myPagination['first_page'] }}"><<</a></span>
		<span><a class="rh-pagination-link" style="line-height: 3;" href="./?sida={{ $myPagination['prev_page'] }}"><</a></span>
		@foreach ($myPagination['start_end'] as $start_end)
			@if($myPagination['current_page'] == $start_end['number'])
				<strong><a class="rh-pagination-link" style="line-height: 3;background-color: #FCAF15;" href="./?sida={{ $start_end['number'] }}">{!! $start_end['number'] !!}</a></strong>
			@else
				<span><a class="rh-pagination-link"  style="line-height: 3;" href="./?sida={{ $start_end['number'] }}">{!! $start_end['number'] !!}</a></span>
			@endif
		@endforeach
		<span><a class="rh-pagination-link"  style="line-height: 3;" href="./?sida={{ $myPagination['next_page'] }}">></a></span>
		<span><a class="rh-pagination-link rh-pagination-link-next"  style="line-height: 3;" href="./?sida={{ $myPagination['last_page'] }}">>></a></span>
	</div>
	<br><br>
@endif