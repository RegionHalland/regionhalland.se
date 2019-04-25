{{--
	Template Name: Analysförteckning
--}}

@extends('layouts.app')

@section('content')
    
    <?php
        $type = 0;
        $id = 0;
        $aid = 0;
        $lid = "";
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $type = 1;
        }
        if(isset($_GET["aid"])){
            $aid = $_GET["aid"];
            $type = 2;
        }
        if(isset($_GET["lid"])){
            $lid = $_GET["lid"];
            $type = 3;
        }
    ?>
    @php($myData = get_region_halland_api_analysforteckning_data($type, $id, $aid, $lid))
    <main class="rh-analysis-overview">
        <div class="center px3" id="main" style="max-width:1440px;">
            <div class="left-align pt3">
                <h1 class="mb3">{{ the_title() }}</h1>
                <p>{{ $post->post_content }}</p>

                <form name="affiliation">
                    <select name="aid" method="get" class="mt2" style="height: 5ex; font-size: 1em;">
                        <option value="" disabled selected>Välj specialitet</option>
                        @php($myAff = get_region_halland_api_analysforteckning_affiliations())
                        @php($mySelected = "")
                        @foreach ($myAff as $aff)
                            @if($aff['0'] == $aid)
                                @php($mySelected = "selected")
                            @endif
                            <option {!! $mySelected !!} value="{!! $aff['0'] !!}">{!! $aff['1'] !!}</option>
                        @php($mySelected = "")
                        @endforeach
                    </select>
                    <input class="ml1 rh-button rh-button--primary" type='submit' value="Visa"/>
                </form>
                    <div class="mt3 rh-filter-alphabet mb4" style="max-width: 54em;">
                        @php($myActive = 0)
                        <?php $strAllLetters = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,x,y,z,Å,Ä,Ö";
                            $arrAllLetters = explode(",",$strAllLetters);
                            foreach ($arrAllLetters as $letter) {
                            $strLetterU = strtoupper($letter);
                        ?>
                            @if($strLetterU == $lid)
                                @php($myActive = 1)
                            @endif
                            @if($myActive == 1)
                            <span class="rh-filter-alphabet-link" style="color:red;font-weight:bold;">
                                <a href="./?lid={!! $strLetterU !!}">{!! $strLetterU !!}</a>
                            </span>
                            @else
                            <span class="rh-filter-alphabet-link">
                                <a href="./?lid={!! $strLetterU !!}">{!! $strLetterU !!}</a>
                            </span>
                            @endif
                        @php($myActive = 0)
                        <?php } ?>
                    </div>
                    @if($type == 1)
                        @include('partials.analys-single')
                    @endif
                    @if($type == 2)
                        @include('partials.analys-aff')
                    @endif
                    @if($type == 3)
                        @include('partials.analys-letter')
                    @endif
            </div>
        </div>
    </main>

@endsection