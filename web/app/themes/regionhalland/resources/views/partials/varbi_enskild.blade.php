<div class="left-align rh-article pt3">

	<form action="./" class="pb3">
		<button class="rh-button" aria-label="Visa alla lediga jobb" role="button" type="submit">Åter till alla jobb</button>
	</form>

	@php($myVarbi = get_region_halland_varbi_works(3, $id, 0, 0, 0))
	@if(isset($myVarbi))
		<h1 class="pb3">{{ $myVarbi['title'] }}</h1>
		<p><strong>Ort:</strong> {{ $myVarbi['town'] }}</p>
		<p><strong>Anställningsform:</strong> {{ $myVarbi['type'] }}, {{ $myVarbi['working_hours'] }}</p>
		<p><strong>Publicerad:</strong> {{ $myVarbi['published'] }}</p>
		<p class="pb2"><sstrong>Sista ansökningsdag:</sstrong> {{ $myVarbi['lastday'] }}</p>
		<a href="{{ $myVarbi['applyURI'] }}"><button class="rh-button rh-button--secondary" role="button">Sök tjänsten</button></a>
		<div class="py2" style="max-width: 55em;">{!! $myVarbi['description'] !!}</div>
		<div class="py2" style="max-width: 55em;">{!! $myVarbi['footer'] !!}</div>
		<table class="rh-table-listing--alternating mb3" style="width:100%; line-height: 1.4">
			<tr>
				<td class="rh-table-listing_cell"><strong>Anställningsform</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['type'] }}</td>
			</tr>
			<tr>
				<td class="rh-table-listing_cell"><strong>Anställningens omfattning</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['hours'] }}</td>
			</tr>
			<tr>
				<td class="rh-table-listing_cell"><strong>Tillträde</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['admission'] }}</td>
			</tr>
			<tr>
				<td class="rh-table-listing_cell"><strong>Löneform</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['pay'] }}</td>
			</tr>
			<tr>
				<td class="rh-table-listing_cell"><strong>Antal lediga befattningar</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['nr_pos'] }}</td>
			</tr>
			<tr>
				<td class="rh-table-listing_cell"><strong>Sysselsättningsgrad</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['working_hours'] }}</td>
			</tr>
			<tr>
				<td class="rh-table-listing_cell"><strong>Ort</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['town'] }}</td>
			</tr>
			<tr>
				<td class="rh-table-listing_cell"><strong>Län</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['county'] }}</td>
			</tr>
			<tr>
				<td class="rh-table-listing_cell"><strong>Land</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['country'] }}</td>
			</tr>
			<tr>
				<td class="rh-table-listing_cell"><strong>Referensnummer</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['ref_no'] }}</td>
			</tr>
			@if($myVarbi['kontakt'])
				<tr>
					<td class="rh-table-listing_cell"><strong>Kontakt</strong></td>
					<td class="rh-table-listing_cell">
						@foreach ($myVarbi['kontakt'] as $kontakt)
							{{ $kontakt['0'] }}, {{ $kontakt['2'] }}
						@endforeach
					</td>
				</tr>
			@endif
			@if($myVarbi['facket'])
				<tr>
					<td class="rh-table-listing_cell"><strong>Facklig företrädare</strong></td>
					<td class="rh-table-listing_cell">
						@foreach ($myVarbi['facket'] as $facket)
							{{ $facket['0'] }}, {{ $facket['2'] }}<br>
						@endforeach
					</td>
				</tr>
			@endif
			<tr>
				<td class="rh-table-listing_cell"><strong>Publicerat</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['published'] }}</td>
			</tr>
			<tr>
				<td class="rh-table-listing_cell"><strong>Sista ansökningsdag</strong></td>
				<td class="rh-table-listing_cell">{{ $myVarbi['lastday'] }}</td>
			</tr>
		</table>
		<p>
			<a href="{{ $myVarbi['applyURI'] }}"><button class="rh-button rh-button--secondary" role="button">Sök tjänsten</button></a>
		</p>
	@endif

</div>