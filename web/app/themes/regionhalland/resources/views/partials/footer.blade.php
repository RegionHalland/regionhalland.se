<footer id="footer-top-placeholder" style="background-color: #C3DCC1; line-height: 1.4;">
    <div class="clearfix center px3 pb3" style="max-width: 1440px;">
        <div class="left-align col col-12 sm-col-12 md-col-3 lg-col-3">
            <p class="h2 pt3">Kontakta oss</p>
            <p>
                Region Halland<br>
                Box 517<br>
                301 80 Halmstad
            </p>
            <p>
                <strong>Telefon:</strong> 035 - 13 48 00<br>
                <strong>E-post:</strong> <a href="mailto:regionen@regionhalland.se">regionen@regionhalland.se</a>
            </p>
            <p>
                <a href="/om-region-halland/kontakt/">Fler kontaktvägar</a>
            </p>
            <p>
                <a href="/om-region-halland/kontakt/anmal-misstanke-om-jav-mutor-eller-tjanstefel/">Anmäl misstanke om jäv, mutor eller tjänstefel</a>
            </p>

        </div>

        <div class="left-align col col-12 sm-col-12 md-col-3 lg-col-3">
            <p class="h2 pt3">Aktuellt</p>
            <ul>
                <li><a href="/nyheter">Nyhetsarkiv</a></li>
                <li><a href="http://press.regionhalland.se">Pressrum</a></li>
                <li><a href="/om-region-halland/kontakt/region-halland-i-sociala-medier/">Region Halland i sociala medier</a></li>
                <li><a href="/demokrati-och-politik/anslagstavla/">Anslagstavla</a></li>
                <li><a href="/demokrati-och-politik/moten-och-handlingar/">Möten och handlingar</a></li>
            </ul>
        </div>
        <div class="left-align col col-12 sm-col-12 md-col-3 lg-col-3">
            <p class="h2 pt3">Om webbplatsen</p>
            <ul>
                <li><a href="/om-region-halland/om-webbplatsen/">Information om cookies</a></li>
                <li><a href="/om-region-halland/dataskydd/">Behandling av personuppgifter</a></li>
            </ul>

            <p class="h2 pt3">Ämnesområden</p>
            @php($first_level_pages = get_region_halland_tree_first_level())
            @if(isset($first_level_pages) && !empty($first_level_pages))
                <ul>
                    @foreach($first_level_pages as $first_level_page)
                        @if($first_level_page->active === true)
                            <li>
                                <a class="active" href="{{ $first_level_page->url }}">{{ $first_level_page->post_title }}</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $first_level_page->url }}">{{ $first_level_page->post_title }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endif

        </div>

        <div class="left-align col col-12 sm-col-12 md-col-3 lg-col-3">
            <p class="h2 pt3">Andra webbplatser</p>
            <ul>
                <li><a href="https://www.1177.se/Halland">1177 Vårdguiden</a></li>
                <li><a href="https://vardgivare.regionhalland.se/">Webbplats för vårdgivare</a></li>
                <li><a href="https://www.hallandstrafiken.se/">Hallandstrafiken</a></li>
                <li><a href="https://www.visithalland.com/">Visit Halland</a></li>
                <li><a href="http://www.teaterhalland.nu/">Teater Halland</a></li>
            </ul>
        </div>
    </div>
</footer>
{{--
<div class="rh-footer">

	<div class="rh-footer-section">
		<h5>Kontakta oss </h5>
		<hr class="rh-footer-title-hr">
		<p>
			Region Halland </br>
			Box 517 </br>
			301 80 Halmstad
		</p>
		<p><strong> Telefon:</strong> 035 - 13 48 00 </p>
		<p><strong> E-post:</strong> <a class="rh-link"> regionen@regionhalland.se</a> </p>
		<br>
		<p><a class="rh-link"> Kontakta mottagning</a></p>
		<p><a class="rh-link"> Kontakta personal</a></p>
	</div>

	<div class="rh-footer-section">
		<h5>Övriga webbplatser </h5>
		<hr class="rh-footer-title-hr">
		<ul>
			<li class="rh-footer-item">
				<a class="rh-link" href="#">
					Regionhalland.se
				</a>
			</li>
			<li class="rh-footer-item">
				<a class="rh-link" href="#">
					Vardgivare.regionhalland.se
				</a>
			</li>
			<li class="rh-footer-item">
				<a class="rh-link" href="#">
					Intra.regionhalland.se
				</a>
			</li>
			<li class="rh-footer-item">
				<a class="rh-link" href="#">
					Hallandstrafiken.se
				</a>
			</li>
			<li class="rh-footer-item">
				<a class="rh-link" href="#">
					1177.se
				</a>
			</li>
		</ul>
	</div>

	<div class="rh-footer-section">
		<h5>Om webbplatsen </h5>
		<hr class="rh-footer-title-hr">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation allamco laboris nisi ut aliquip ex ea commodo consequat. </p>
	</div>

</div>
 --}}
<script src="{!! env('WP_HOME') !!}/include/scripts/jquery.3.3.1.min.js?ver=3.3.1"></script>

<script src="{!! env('WP_HOME') !!}/styleguide2.2.1/js/components.js"></script>

<script>
    function debounce(delay, fn) {
        var timer = null;
        return function () {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                fn.apply(context, args);
            }, delay);
        };
    }

    $('a[href^="#"]').on( "click", function() {
        var target = $(this.hash);
        if (target.length) {

            // Animate target
            $('html,body').animate({scrollTop: target.offset().top}, 800);

            // Add class for highlight the text
            $(target).addClass("content-highlight");

            // Wait 2s and then remove the highlight class
            setTimeout(function(){
                $(target).removeClass("content-highlight");
            }, 2000);

            return false;
        }
    });

    if ($("body.page-template-default")[0]){
        $(window).scroll(debounce(250, function() {

            var myPosition = Math.round($('#content-nav-placeholder').offset().top - $(window).scrollTop());
            var myFooterTop = Math.round($('#footer-top-placeholder').offset().top - $(window).scrollTop());
            var myContentNavBottom = Math.round($('#content-nav-bottom-placeholder').offset().top - $(window).scrollTop());
            if (myPosition < 30) {
                if (myFooterTop < myContentNavBottom + 40) {
                    $(".content-nav__item").addClass("content-nav__item--tight");
                } else {
                    $("#content-nav-container").addClass("rh-get-fixed-sticky");
                    $(".content-nav__item--tight").removeClass("content-nav__item--tight");
                }                                                               
            } else {
                $("#content-nav-container").removeClass("rh-get-fixed-sticky");
                $(".content-nav__item--tight").removeClass("content-nav__item--tight");

            }
        }));
    }

    $(".rh-header-button--search").on( "click", function() {
        $(".rh-header-search-desktop").show();
        $(".rh-header-button--search").hide();
    });

    // **************************************
    // *** Javascript set cookie function ***
    // **************************************
    function setCookie(name,value,days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }


    // ****************************
    // *** Cookie notice accept ***
    // ****************************
    $("#cookie-consent").on( "click", function() {
        // set cookie with vanilla javascript function
        setCookie('cookie_notice_accepted','1',365);
        // Hide div with cookie notice text + button
        $(".rh-cookie").hide();
    });

</script>
<script type="text/javascript">var _baTheme=0, _baMode='Aktivera Talande Webb', _baUseCookies=true, _baHideOnLoad=true;</script>
<script type="text/javascript" src="//www.browsealoud.com/plus/scripts/ba.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1181886-12"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-1181886-12');
</script>
