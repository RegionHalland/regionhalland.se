<h2 class="mb3" style="border-bottom: 2px solid #004890;">{!! $myData['name'] !!}</h2>
<table class="rh-table-listing--alternating mb3" style="width:100%; line-height: 1.4">
<tr>
    <td class="rh-table-listing_cell"><strong>VAS Provkod:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['vasOrderCode'] !!}<br>
    </td>
</tr>
<tr>
    <td class="rh-table-listing_cell"><strong>Analyserande lab:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['laboratory']['name'] !!}<br>
    	{!! $myData['laboratory']['description'] !!}<br>
    </td>
</tr>
<tr>
    <td class="rh-table-listing_cell"><strong>Remiss:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['referral']['name'] !!}<br>
    	{!! $myData['referral']['description'] !!}<br>
    	<a href="{!! $myData['referral']['linkUrl'] !!}" target="_blank">{!! $myData['referral']['linkText'] !!}</a><br>
    </td>
</tr>
<tr>
    <td class="rh-table-listing_cell"><strong>Provtagningsmaterial:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['samplingMaterial']['name'] !!}<br>
    	{!! $myData['samplingMaterial']['description'] !!}<br>
    </td>
</tr>
<tr>
    <td class="rh-table-listing_cell"><strong>Enhet:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['unit']['name'] !!}<br>
    </td>
</tr>
<tr>
    <td class="rh-table-listing_cell"><strong>Kommentar/mer info:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['informations'][0]['text'] !!}<br>
    </td>
</tr>
<tr>
    <td class="rh-table-listing_cell"><strong>Referensintervall:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['informations'][2]['text'] !!}<br>
    </td>
</tr>
<tr>
    <td class="rh-table-listing_cell"><strong>Analysfrekvens:</strong></td>
    <td class="rh-table-listing_cell">{!! $myData['frequency'] !!}</td>
</tr>
<tr>
    <td class="rh-table-listing_cell"><strong>Pris:</strong></td>
    <td class="rh-table-listing_cell">{!! $myData['price'] !!}</td>
</tr>
<tr>
    <td class="rh-table-listing_cell"><strong>Ackrediterad:</strong></td>
    @if($myData['accredited'] == 1)
    <td class="rh-table-listing_cell">Ja</td>
    @else
    <td class="rh-table-listing_cell">Nej</td>
    @endif
</tr>
</table>