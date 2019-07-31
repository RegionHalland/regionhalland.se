
<div class="rh-label-previous mb2">
    <span class="rh-label-previous-icon--blue"></span>
    <p class="rh-label-previous-title">
    @if($_SESSION["type"] == 2)
        <a href="./?sid=<?=$_SESSION["sid"]?>">Analysförteckning</a>
    @elseif($_SESSION["type"] == 3)
        <a href="./?lid=<?=$_SESSION["lid"]?>">Analysförteckning</a>
    @elseif($_SESSION["type"] == 4)
        <a href="./?all=1">Analysförteckning</a>
    @elseif($_SESSION["type"] == 5)
        <a href="./?q=<?=$_SESSION["q"]?>">Analysförteckning</a>
    @else
        <a href="./">Analysförteckning</a>
    @endif
    </p>
</div>

<h2 class="mb3" style="border-bottom: 2px solid #004890;">({!! $myData['name'] !!})</h2>


<div class="clearfix">
    @if($myData['vas-order-code'])
        <div class="col col-12 md-col-4 mb2">
            <strong>VAS Provkod:</strong>
        </div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['vas-order-code'] !!}
        </div>
        <hr class="my2">
    @endif
    @if($myData['laboratory-name'])
        <div class="col col-12 md-col-4 mb2">
            <strong>Analyserande lab:</strong>
        </div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['laboratory-name'] !!}<br>
            {!! $myData['laboratory-description'] !!}<br>
            @if($myData['laboratory-link-url'])
                <a href="{!! $myData['laboratory-link-url'] !!}" target="_blank">{!! $myData['laboratory-link-text'] !!}</a>
            @endif
        </div>
        <hr class="my2">
    @endif
    @if($myData['referral-name'])
        <div class="col col-12 md-col-4 mb2">
            <strong>Remiss:</strong>
        </div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['referral-name'] !!}<br>
            {!! $myData['referral-description'] !!}<br>
            @if($myData['referral-link-url'])
                <br><a href="{!! $myData['referral-link-url'] !!}" target="_blank">{!! $myData['referral-link-text'] !!}</a>
            @endif
            @if($myData['links-exist-referral'] == 1)
                <br><a href="{!! $myData['links-link-url-referral'] !!}" target="_blank">{!! $myData['links-link-text-referral'] !!}</a>
            @endif
        </div>
        <hr class="my2">
    @endif
    @if($myData['sampling-material-name'])
        <div class="col col-12 md-col-4 mb2">
            <strong>Provtagningsmaterial:</strong>
        </div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['sampling-material-name'] !!}<br>
            {!! $myData['sampling-material-description'] !!}<br>
            @if($myData['sampling-material-link-url'])
                <br><a href="{!! $myData['sampling-material-link-url'] !!}" target="_blank">{!! $myData['sampling-material-link-text'] !!}</a>
            @endif
            @if($myData['links-exist-provtagning'] == 1)
                <br><a href="{!! $myData['links-link-url-provtagning'] !!}" target="_blank">{!! $myData['links-link-text-provtagning'] !!}</a>
            @endif
        </div>
        <hr class="my2">
    @endif
    @if($myData['informations-text-provtagning'])
        <div class="col col-12 md-col-4 mb2">
            <strong>Provtagning:</strong>
        </div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['informations-text-provtagning'] !!}
        </div>
        <hr class="my2">
    @endif
    @if($myData['informations-text-take-care'])
        <div class="col col-12 md-col-4 mb2"><strong>Omhändertagande:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['informations-text-take-care'] !!}
            @if($myData['links-exist-take-care'] == 1)
                <br><a href="{!! $myData['links-link-url-take-care'] !!}" target="_blank">{!! $myData['links-link-text-take-care'] !!}</a>
            @endif
        </div>
        <hr class="my2">
    @endif
    @if($myData['informations-text-indication'])
        <div class="col col-12 md-col-4 mb2"><strong>Indikation:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['informations-text-indication'] !!}
            @if($myData['links-exist-indication'] == 1)
                <br><a href="{!! $myData['links-link-url-indication'] !!}" target="_blank">{!! $myData['links-link-text-indication'] !!}</a>
            @endif
        </div>
        <hr class="my2">
    @endif
    @if($myData['method'])
        <div class="col col-12 md-col-4 mb2"><strong>Metod:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['method'] !!}
        </div>
        <hr class="my2">
    @endif
    @if($myData['informations-text-info'])
        <div class="col col-12 md-col-4 mb2"><strong>Kommentar/mer info:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['informations-text-info'] !!}
            @if($myData['links-exist-information'] == 1)
                <br><a href="{!! $myData['links-link-url-information'] !!}" target="_blank">{!! $myData['links-link-text-information'] !!}</a>
            @endif
        </div>
        <hr class="my2">
    @endif
    @if($myData['unit-name'] && $myData['unit-name'] != 'Ingen enhet')
            <div class="col col-12 md-col-4 mb2"><strong>Enhet:</strong></div>
            <div class="col col-12 md-col-8 mb2">
                {!! $myData['unit-name'] !!}
            </div>
        <hr class="my2">
    @endif
    @if($myData['informations-text-interval'])
        <div class="col col-12 md-col-4 mb2"><strong>Referensintervall:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['informations-text-interval'] !!}
        </div>
        <hr class="my2">
    @endif
    @if($myData['informations-text-answer'])
        <div class="col col-12 md-col-4 mb2"><strong>Svarstolkning:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['informations-text-answer'] !!}
            @if($myData['links-exist-answer'] == 1)
                <br><a href="{!! $myData['links-link-url-answer'] !!}" target="_blank">{!! $myData['links-link-text-answer'] !!}</a>
            @endif
        </div>
        <hr class="my2">
    @endif
    @if($myData['frequency'])
        <div class="col col-12 md-col-4 mb2"><strong>Analysfrekvens:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['frequency'] !!}
        </div>
        <hr class="my2">
    @endif
    @if($myData['informations-text-error'])
        <div class="col col-12 md-col-4 mb2"><strong>Felkällor:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['informations-text-error'] !!}
        </div>
        <hr class="my2">
    @endif
    @if($myData['response-time'])
        <div class="col col-12 md-col-4 mb2"><strong>Svarstid:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['response-time'] !!}
        </div>
        <hr class="my2">
    @endif
    @if($myData['price'])
        <div class="col col-12 md-col-4 mb2"><strong>Pris:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['price'] !!}
        </div>
        <hr class="my2">
    @endif
    @if($myData['accredited-text'] && ($myData['accredited-value'] == 1 || $myData['accredited-value'] == 2))
        <div class="col col-12 md-col-4 mb2"><strong>Ackrediterad:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['accredited-text'] !!}
        </div>
        <hr class="my2">
    @endif
    @if($myData['biobank-text'] && ($myData['biobank-value'] == 1 || $myData['biobank-value'] == 2))
        <div class="col col-12 md-col-4 mb2"><strong>Biobank:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['biobank-text'] !!}
            @if($myData['links-exist-biobank'] == 1)
                <br><a href="{!! $myData['links-link-url-biobank'] !!}" target="_blank">{!! $myData['links-link-text-biobank'] !!}</a>
            @endif
        </div>
        <hr class="my2">
    @endif
    @if($myData['updated-date'])
        <div class="col col-12 md-col-4 mb2"><strong>Uppdaterad:</strong></div>
        <div class="col col-12 md-col-8 mb2">
            {!! $myData['updated-date'] !!}
        </div>
        <hr class="my2">
    @endif
</div>