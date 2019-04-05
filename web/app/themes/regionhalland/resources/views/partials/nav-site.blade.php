<nav class="rh-header center px3" aria-label="Sidhuvud" style="max-width: 1440px;">
    <div class="rh-header-logo">
        <div class="rh-logo-sitename">
            <a href="/"><img class="rh-logo-sitename-logo" src="/styleguide2.2.1/images/components/rh-logo-sitename/navigation_logo.svg" alt="Länk till förstasidan"></a>
        </div>
    </div>
    {{-- Utilities --}}
    <div class="rh-toplinks">
        <ul class="rh-toplinks-nav" aria-label="Genvägar i sidhuvudet">
            <li class="rh-toplinks-nav-item">
                <i class="feather icon-headphones rh-toplinks-nav-link-icon"></i>
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
                <input type="text" name="q" class="rh-search-term" placeholder="Skriv din sökning här" value="<?=$strSearchText?>" aria-label="Sökruta">
                <button type="submit" class="rh-search-button">
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