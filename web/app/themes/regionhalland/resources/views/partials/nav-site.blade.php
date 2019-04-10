<nav class="rh-header center px3" aria-label="Sidhuvud" style="max-width: 1440px;">
    <a href="/"><img class="" src="/include/img/rh-logo.jpg" alt="Länk till förstasidan"></a>
    {{-- Utilities --}}
    <div class="rh-toplinks">
        <ul class="rh-toplinks-nav" aria-label="Genvägar i sidhuvudet">
            <li class="rh-toplinks-nav-item">
                <i class="feather icon-volume-1 rh-toplinks-nav-link-icon"></i>
                <a class="rh-toplinks-nav-link" href="#">Talande webb</a>
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

    <div class="rh-header-menu">
        <button class="rh-header-button rh-header-button--search"></button>
        {{--<button class="rh-header-button rh-header-button--menu"></button>--}}
    </div>
</nav>