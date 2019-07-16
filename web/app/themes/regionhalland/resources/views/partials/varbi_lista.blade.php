@php($myVarbi = get_region_halland_varbi_works($type, 0, $mid, $fid, $gid))
@if(isset($myVarbi))
    
    @php($myPagination = get_region_halland_array_pagination(count($myVarbi),10,'sida'))
    @php($i = $myPagination['start_item'])
    
    <form method="get" name="municipality">
        <p>
            <select name="fid" class="mt2" style="height: 5ex; font-size: 1em;">
                <option value="0" selected>Välj yrkesområde</option>
                @php($myFieldData = region_halland_varbi_works_get_field_data())
                @php($myFieldSelected = "")
                @foreach ($myFieldData as $field)
                    @if($field['id'] == $fid)
                        @php($myFieldSelected = "selected")
                    @endif
                    <option {!! $myFieldSelected !!} value="{!! $field['id'] !!}">{!! $field['name'] !!}</option>
                @php($myFieldSelected = "")
                @endforeach
            </select>
            <input class="ml1 rh-button rh-button--secondary" type='submit' value="Visa"/>
        </p>
        @if($fid != 0)
        <p>
            <select name="gid" class="mt2" style="height: 5ex; font-size: 1em;">
                <option value="0" selected>Välj yrkesgrupp</option>
                @php($myGroupData = region_halland_varbi_works_get_group_data())
                @php($myGroupSelected = "")
                @foreach ($myGroupData as $group)
                    @if($group['field_id'] == $fid)
                        @if($group['group_id'] == $gid)
                            @php($myGroupSelected = "selected")
                        @endif
                        <option {!! $myGroupSelected !!} value="{!! $group['group_id'] !!}">{!! $group['group_name'] !!}</option>
                    @endif
                @php($myGroupSelected = "")
                @endforeach
            </select>
            <input class="ml1 rh-button rh-button--secondary" type='submit' value="Visa"/>
        </p>
        @endif
        <p>
            <select name="mid" class="mt2" style="height: 5ex; font-size: 1em;">
                <option value="0" selected>Välj kommun</option>
                @php($myKommunData = region_halland_varbi_works_get_kommun_data())
                @php($myKommunSelected = "")
                @foreach ($myKommunData as $kommun)
                    @if($kommun['id'] == $mid)
                        @php($myKommunSelected = "selected")
                    @endif
                    <option {!! $myKommunSelected !!} value="{!! $kommun['id'] !!}">{!! $kommun['name'] !!}</option>
                @php($myKommunSelected = "")
                @endforeach
            </select>
            <input class="ml1 rh-button rh-button--secondary" type='submit' value="Visa"/>
        </p>
        
    </form>


    <a href="./" class="py2">
        <button class="rh-button" aria-label="Töm urval" role="button">Töm urval</button>
    </a>
    
    <br><br><br>

    @if($myPagination['antal_items'] > 0)
        <span>
            @if($myPagination['antal_items'] == 1)
                <h2 class="mb1" style="border-bottom: 4px solid #378A30">{{ $myPagination['antal_items'] }} ledigt jobb - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2>
            @else
                <h2 class="mb1" style="border-bottom: 4px solid #378A30">{{ $myPagination['antal_items'] }} lediga jobb - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2>
            @endif
        </span>
        <ul>
        <?php while ($i < $myPagination['end_item']) { ?>
            <li class="pl3 pt2 pb1 mt2" style="background-color:#F4F4F4; max-width:40em;">
                <h2><a href="./?id={{ $myVarbi[$i]['id'] }}" style="text-decoration: none; color:black;">{{ $myVarbi[$i]['title'] }}</a></h2>
                <p><strong>Ort:</strong> {{ $myVarbi[$i]['town'] }}</p>
                <p><strong>Anställningsform:</strong> {{ $myVarbi[$i]['type'] }}, {{ $myVarbi[$i]['working_hours'] }}</p>
                <p><strong>Publicerad:</strong> {{ $myVarbi[$i]['published'] }}</p>
                <p class="pb2"><strong>Sista ansökningsdag:</strong> {{ $myVarbi[$i]['lastday'] }}</p>
            </li>
        <?php $i++; } ?>
        </ul>
    @else
        <h2 class="mb1" style="border-bottom: 4px solid #378A30">I det urval du har gjort finns det inga lediga jobb</h2>
    @endif

    <br><br>
    
    @if($myPagination['antal_items'] > 0)
        <?php
            if ($fid == 0 && $gid == 0 && $mid == 0) {
                $myLink = "";
            } else {
                $myLink = "&fid=" .$fid. "&gid=" .$gid. "&mid=" .$mid;
            }
        ?>
        <div>
            <span><a class="rh-pagination-link rh-pagination-link-previous" style="line-height: 3;" href="./?sida={{ $myPagination['first_page'] }}{{ $myLink }}"><<</a></span>
            <span><a class="rh-pagination-link" style="line-height: 3;" href="./?sida={{ $myPagination['prev_page'] }}{{ $myLink }}"><</a></span>
            @foreach ($myPagination['start_end'] as $start_end)
                @if($myPagination['current_page'] == $start_end['number'])
                    <strong><a class="rh-pagination-link" style="line-height: 3;background-color: #FCAF15;" href="./?sida={{ $start_end['number'] }}{{ $myLink }}">{!! $start_end['number'] !!}</a></strong>
                @else
                    <span><a class="rh-pagination-link"  style="line-height: 3;" href="./?sida={{ $start_end['number'] }}{{ $myLink }}">{!! $start_end['number'] !!}</a></span>
                @endif
            @endforeach
            <span><a class="rh-pagination-link"  style="line-height: 3;" href="./?sida={{ $myPagination['next_page'] }}{{ $myLink }}">></a></span>
            <span><a class="rh-pagination-link rh-pagination-link-next"  style="line-height: 3;" href="./?sida={{ $myPagination['last_page'] }}{{ $myLink }}">>></a></span>
        </div>
    @endif

    <br><br>

@endif