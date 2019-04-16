@extends('layouts.app')

@section('content')

<main class="" id="main">
	<div class="center px4 pt3 pb2" style="max-width: 1440px;">
        <div class="pb3 rh-label-previous">
            <span class="rh-label-previous-icon"></span>
            <p class="rh-label-previous-title">
                <a href="/kultur/" style="color:black;">Kultur</a>
            </p>
        </div>
        <h1 class="left-align pb2">
            Kulturarrangemang
        </h1>
        <div class="col-12 sm-col-8 md-col-8 lg-col-8 left-align" style="font-size: 1.2em; line-height: 1.4;">
            Region Halland gör många olika kulturarrangemang, ofta i samarbete med andra arrangörer. Välkommen till föreställningar, konserter, samtal och andra aktiviteter!
        </div>
    </div>
    <div style="background-color: #E4E4E4">
        <div class="center px4 pt4 pb4" style="max-width:1440px">
            @php($myItems = get_region_halland_acf_page_kulturarrangemang_items())
            <ul class="left-align" aria-label="Arrangemangskalender">
                @foreach($myItems as $item)
                    <li>
                        <div class="rh-event-card-calendar mb2 l2" style="background-color: white;">
                            <div class="pl3 pr1" style="color: black; position: relative; top:50%; transform: translateY(+100%);">
                                <span class="h2 rh-event-card-calendar-date-day" style="color:black">{{ $item->kultur_starttid }}</span>
                            </div>
                            <div class="py2 rh-event-card-calendar-description">
                                <h2 class="rh-event-card-calendar-title">
                                    <a href="{{ $item->url }}" class="rh-event-card-calendar-title-link" style="color: black;">
                                        {{ $item->post_title }}
                                    </a>
                                </h2>
                                <p class="rh-event-card-calendar-inline rh-event-card-calendar-time">
                                    {{ $item->kultur_tid }}
                                </p>
                                {{-- <p class="">
                                    {{ $item->kultur_start_tid_dag }} {{ $item->kultur_start_tid_manad }}
                                </p>--}}
                                <p class="">
                                    {!! $item->kultur_plats !!}
                                </p>
                                    @foreach($item->sub_category_labels as $label)
                                    <span class="rh-labels">{{ $label['label'] }}</span>
                                    @endforeach
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</main>

@endsection
