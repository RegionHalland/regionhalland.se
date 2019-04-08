{{-- HSA --}}
@php($myPerson = get_region_halland_acf_page_personer_enheter_person())
@php($myEnhet = get_region_halland_acf_page_personer_enheter_enhet())

@php($myPersonData = get_region_halland_personer_enheter(1, $myPerson, ""))
@php($myEnhetData = get_region_halland_personer_enheter(2, "", $myEnhet))

@if($myPersonData)
    <div class="rh-personal-info">
        <div class="rh-box-info-alone">
            <h5>{{ $myPersonData['firstname'] }} {{ $myPersonData['lastname'] }}</h5>
            <h6 class="rh-personal-info-text">{{ $myPersonData['jobtitle'] }}</h6>
            <hr class="rh-personal-info-hr">
        </div>
    </div>
@endif

@if($myEnhetData)
    <div class="rh-unit-info">

        <h5>{{ $myEnhetData['enhet_name'] }}</h5>
        <hr class="rh-unit-info-title-hr">
        <p class="rh-unit-info-text rh-unit-info-text-inline"><strong>Telefontider:</strong>
            @foreach ($myEnhetData['enhet_telephones'] as $phones)
                {{ $phones['landsnummer'] }} {{ $phones['riktnummer'] }} {{ $phones['telefonnummer'] }}<br>
                @foreach ($phones['telefontider'] as $tider)
                    {{ $tider['day'] }} {{ $tider['openingTime'] }} - {{ $tider['closingTime'] }}<br>
                @endforeach
            @endforeach
        </p>
        <p class="rh-unit-info-text"><strong>Öppettider:</strong>
            @foreach ($myEnhetData['visiting_hours'] as $visiting)
                {{ $visiting['day'] }} {{ $visiting['openingTime'] }} - {{ $visiting['closingTime'] }}
            @endforeach
        </p>
        <p class="rh-unit-info-text"><strong>Besöksadress:</strong>{{ $myEnhetData['address_street'] }}<br>
            {{ $myEnhetData['address_postcode'] }} {{ $myEnhetData['address_city'] }}<br>
        </p>
    </div>
@endif
{{-- HSA END --}}