@php($myPerson = get_region_halland_acf_page_personer_enheter_person())
@if($myPerson)
    @php($myPersonData = get_region_halland_api_personer_enheter(1, $myPerson, ""))
    @if($myPersonData['status'] == 1)
        <div class="rh-personal-info pt2 mb2">
            <div class="rh-box-info-alone pb2 mb2" style="border-bottom: 2px solid #004890;">
                <p><strong>{{ $myPersonData['firstname'] }} {{ $myPersonData['lastname'] }}</strong></p>
                <span class="rh-personal-info-text">{{ $myPersonData['jobtitle'] }}</span>
            </div>
        </div>
    @endif
@endif