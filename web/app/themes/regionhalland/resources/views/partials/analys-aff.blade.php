<h2 class="mb3" style="border-bottom: 2px solid #004890;">Vad letar du efter?</h2>
<table class="rh-table-listing--alternating mb3" style="width:100%; line-height: 1.4">
<tr>
    <th class="rh-table-listing_cell" data-analysis-type="Bårhus, obduktion Halland" style="text-align:left;"><strong>System</strong></th>
    <th class="rh-table-listing_cell" data-analysis-type="Klinisk kemi Halland" style="text-align:left;"><strong>Analysnamn</strong></th>
    <th class="rh-table-listing_cell" style="text-align:left;"><strong>Lab</strong></th>
    <th class="rh-table-listing_cell" style="text-align:left;"></th>
</tr>
@foreach ($myData as $data)
<tr>
    <td class="rh-table-listing_cell">{!! $data['system'] !!}</td>
    <td class="rh-table-listing_cell"><a href="{!! env('WP_HOME') !!}/analysforteckning/?id={!! $data['id'] !!}">{!! $data['name'] !!}</a></td>
    <td class="rh-table-listing_cell">{!! $data['laboratory-name'] !!}</td>
    <td class="rh-table-listing_cell">{!! $data['affiliation-id'] !!}</td>
</tr>
@endforeach
</table>
