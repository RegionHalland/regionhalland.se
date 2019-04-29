
<div class="rh-label-previous mb2">
    <span class="rh-label-previous-icon"></span>
    <p class="rh-label-previous-title">
    @if($_SESSION["type"] == 2)
        <a href="./?sid=<?=$_SESSION["sid"]?>">Analysförteckning</a>
    @elseif($_SESSION["type"] == 3)
        <a href="./?lid=<?=$_SESSION["lid"]?>">Analysförteckning</a>
    @elseif($_SESSION["type"] == 4)
        <a href="./?all=1">Analysförteckning</a>
    @else
        <a href="./">Analysförteckning</a>
    @endif
    </p>
</div>

<h2 class="mb3" style="border-bottom: 2px solid #004890;">({!! $myData['name'] !!})</h2>
<table class="rh-table-listing--hr mb3" style="width:100%; line-height: 1.4">
@if($myData['vas-order-code'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>VAS Provkod:</strong></td>
    <td class="rh-table-listing_cell">
        {!! $myData['vas-order-code'] !!}
    </td>
</tr>
@endif
@if($myData['laboratory-name'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Analyserande lab:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['laboratory-name'] !!}<br>
    	{!! $myData['laboratory-description'] !!}<br>
        @if($myData['laboratory-link-url'])
            <a href="{!! $myData['laboratory-link-url'] !!}" target="_blank">{!! $myData['laboratory-link-text'] !!}</a>
        @endif
     </td>
</tr>
@endif
@if($myData['referral-name'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Remiss:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['referral-name'] !!}<br>
    	{!! $myData['referral-description'] !!}<br>
    	@if($myData['referral-link-url'])
            <a href="{!! $myData['referral-link-url'] !!}" target="_blank">{!! $myData['referral-link-text'] !!}</a>
        @endif
    </td>
</tr>
@endif
@if($myData['sampling-material-name'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Provtagningsmaterial:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['sampling-material-name'] !!}<br>
    	{!! $myData['sampling-material-description'] !!}<br>
        @if($myData['sampling-material-link-url'])
            <a href="{!! $myData['sampling-material-link-url'] !!}" target="_blank">{!! $myData['sampling-material-link-text'] !!}</a>
        @endif
    </td>
</tr>
@endif
@if($myData['informations-text-provtagning'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Provtagning:</strong></td>
    <td class="rh-table-listing_cell">
        {!! $myData['informations-text-provtagning'] !!}
    </td>
</tr>
@endif
@if($myData['informations-text-take-care'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Omhändertagande:</strong></td>
    <td class="rh-table-listing_cell">
        {!! $myData['informations-text-take-care'] !!}
    </td>
</tr>
@endif
@if($myData['informations-text-indication'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Indikation:</strong></td>
    <td class="rh-table-listing_cell">
        {!! $myData['informations-text-indication'] !!}
    </td>
</tr>
@endif
@if($myData['method'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Metod:</strong></td>
    <td class="rh-table-listing_cell">
        {!! $myData['method'] !!}
    </td>
</tr>
@endif
@if($myData['unit-name'] && $myData['unit-name'] != 'Ingen enhet')
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Enhet:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['unit-name'] !!}
    </td>
</tr>
@endif
@if($myData['informations-text-info'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Kommentar/mer info:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['informations-text-info'] !!}
        @if($myData['links-link-url'])
            <a href="{!! $myData['links-link-url'] !!}" target="_blank">{!! $myData['links-link-text'] !!}</a>
        @endif
    </td>
</tr>
@endif
@if($myData['informations-text-interval'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Referensintervall:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['informations-text-interval'] !!}
    </td>
</tr>
@endif
@if($myData['informations-text-answer'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Svarstolkning:</strong></td>
    <td class="rh-table-listing_cell">
        {!! $myData['informations-text-answer'] !!}
    </td>
</tr>
@endif
@if($myData['frequency'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Analysfrekvens:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['frequency'] !!}
    </td>
</tr>
@endif
@if($myData['response-time'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Svarstid:</strong></td>
    <td class="rh-table-listing_cell">
        {!! $myData['response-time'] !!}
    </td>
</tr>
@endif
@if($myData['price'])
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Pris:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['price'] !!}
    </td>
</tr>
@endif
@if($myData['accredited-text'] && $myData['accredited-value'] == 1)
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Ackrediterad:</strong></td>
    <td class="rh-table-listing_cell">
    	{!! $myData['accredited-text'] !!}
    </td>
</tr>
@endif
@if($myData['biobank-text'] && $myData['biobank-value'] == 1)
<tr class="rh-table-listing__row">
    <td class="rh-table-listing_cell"><strong>Biobank:</strong></td>
    <td class="rh-table-listing_cell">
        {!! $myData['biobank-text'] !!}
    </td>
</tr>
@endif
</table>