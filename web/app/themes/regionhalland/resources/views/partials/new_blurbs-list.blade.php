@php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs())
@if(isset($myBlurbs))
    <div class="center" style="max-width: 1440px;">
        <ul class="clearfix center mb2 mt2" style="max-width:1440px;">
        @foreach ($myBlurbs as $blurbs)
            <li class="left-align col col-12 sm-col-6 md-col-6 lg-col-4">
                <div class="mx1 my2" style="border-bottom: 4px solid #C3DCC1; border-left: 1px solid #E4E4E4; border-right: 1px solid #E4E4E4;">
                    <div style="height: 200px; overflow:hidden;position:relative">
                        <img src="{!! $blurbs['image_url'] !!}" style="width:100%; position: absolute; top:50%; transform: translateY(-50%);">
                    </div>
                    <div class="mx2 pt1" style="height: 18ex; overflow:hidden;">
                        <h3 style="line-height: 1.3"><a href="{{ $blurbs['link_url'] }}" target="{{ $blurbs['link_target'] }}" style="color:black;">{{ $blurbs['link_title'] }}</a></h3>
                        <p style="line-height: 1.4">{{ $blurbs['post_content'] }}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    </div>
@endif
