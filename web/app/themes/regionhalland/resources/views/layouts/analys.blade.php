<!doctype html>

<html style="height: 101%;" @php(language_attributes())>

@include('partials.head')

<body style="height: 101%" @php(body_class())>

@include('partials.site-message')
@include('partials.jump-to-content')
@include('partials.cookie-notice')

<nav class="rh-header center px3" aria-label="Sidhuvud" style="max-width: 1440px;">
    <a href="https://vardgivare.regionhalland.se"><img class="" src="/include/img/rh-logo.jpg" alt="Länk till förstasidan"></a>
    {{-- Utilities --}}
    <div class="rh-toplinks">
        <ul class="rh-toplinks-nav" aria-label="Genvägar i sidhuvudet">
            <li class="rh-toplinks-nav-item">
                <i class="feather icon-volume-1 rh-toplinks-nav-link-icon"></i>
                <a id="bapluslogo" class="rh-toplinks-nav-link logo" title="Aktivera Talande Webb" onclick="toggleBar();" href="#">Talande Webb</a>
            </li>
        </ul>
    </div>

    {{-- Utilities END --}}
    <div class="rh-header-search-desktop">
        <form name="myForm" method="get" action="{!! env('FINDWISE_SEARCH_URL') !!}">
            <?php
            $strSearchText = "";
            if(isset($_GET["q"])){
                $strSearchText = $_GET["q"];
            }
            ?>
            <div class="rh-search-field">
                <input type="text" name="q" class="rh-search-term" placeholder="Skriv din sökning här" value="<?=$strSearchText?>" style="height:5ex;" aria-label="Sökruta">
                <button type="submit" class="rh-search-button" style="height:5ex; width:8ex;">
                    Sök
                </button>
            </div>
        </form>
    </div>


</nav>

@yield('content')

@include('partials.footer')

</body>

</html>