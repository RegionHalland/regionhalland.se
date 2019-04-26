<h2 class="mb3" style="border-bottom: 2px solid #004890;">{!! $myData['name'] !!}</h2>
<table class="rh-table-listing--alternating mb3" style="width:100%; line-height: 1.4">
@if($myData['vas-order-code'])
<tr>
    <td class="rh-table-listing_cell"><strong>VAS Provkod:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['vas-order-code'] !!}
    </td>
</tr>
@endif
@if($myData['laboratory-name'])
<tr>
    <td class="rh-table-listing_cell"><strong>Analyserande lab:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['laboratory-name'] !!}<br>
    	{!! $myData['laboratory-description'] !!}
    </td>
</tr>
@endif
@if($myData['referral-name'])
<tr>
    <td class="rh-table-listing_cell"><strong>Remiss:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['referral-name'] !!}<br>
    	{!! $myData['referral-description'] !!}<br>
    	<a href="{!! $myData['referral-link-url'] !!}" target="_blank">{!! $myData['referral-link-text'] !!}</a>
    </td>
</tr>
@endif
@if($myData['sampling-material-name'])
<tr>
    <td class="rh-table-listing_cell"><strong>Provtagningsmaterial:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['sampling-material-name'] !!}<br>
    	{!! $myData['sampling-material-description'] !!}
    </td>
</tr>
@endif
@if($myData['unit-name'])
<tr>
    <td class="rh-table-listing_cell"><strong>Enhet:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['unit-name'] !!}
    </td>
</tr>
@endif
@if($myData['informations-text-info'])
<tr>
    <td class="rh-table-listing_cell"><strong>Kommentar/mer info:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['informations-text-info'] !!}
    </td>
</tr>
@endif
@if($myData['informations-text-interval'])
<tr>
    <td class="rh-table-listing_cell"><strong>Referensintervall:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['informations-text-interval'] !!}
    </td>
</tr>
@endif
@if($myData['frequency'])
<tr>
    <td class="rh-table-listing_cell"><strong>Analysfrekvens:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['frequency'] !!}
    </td>
</tr>
@endif
@if($myData['price'])
<tr>
    <td class="rh-table-listing_cell"><strong>Pris:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['price'] !!}
    </td>
</tr>
@endif
@if($myData['accredited-text'])
<tr>
    <td class="rh-table-listing_cell"><strong>Ackrediterad:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['accredited-text'] !!}
    </td>
</tr>
@endif
</table>