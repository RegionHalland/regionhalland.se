{{--
	Template Name: Sektionssida - kulturen
--}}

@extends('layouts.app')

@section('content')

    @while (have_posts()) @php the_post() @endphp

    <main id="main">
        <div style="background-color: #F4F4F4;">
            <div class="pb2 center" style="max-width: 1440px;">
                <div class="left-align">

                    <div class="mx3 pt3 pb3">
                        <h1 class="mx3 pb1">{!! get_the_title() !!}</h1>
                        <div style="font-size: 1.2em; line-height: 1.4;" class="mx3 col-12 sm-col-8 md-col-8 lg-col-8">{{ get_region_halland_acf_page_ingress() }}</div>
                    </div>
                    <div class="">
                        @include('partials.section-navigation')
                    </div>
                </div>
            </div>
        </div>

        @include('partials.new_blurbs-list')

        @if(function_exists('get_region_halland_page_news_taxonomi_category'))
            @php($newsitems = get_region_halland_page_news_taxonomi_category())
            @if($newsitems)
                <div style="background-color: #F4F4F4;" class="pb3 pt3">
                    <div class="center" style="max-width:1440px;">
                        <div class="left-align">
                            <div class="mx3 pt3 pb2">
                                <h1 class="pb2">Nyheter</h1>
                            </div>
                            <ul class="flex flex-wrap pb3 mx3 pt3 px2" aria-label="Nyheter" style="background-color: white; border-radius: 0.4ex; box-shadow: 1px 2px 6px grey;">
                                @foreach($newsitems as $item)
                                    <li class="rh-article pb2 col-12 sm-col-6 md-col-6 lg-col-6 px2">
                                        <h2 class="h3 rh-article-title">
                                            <a class="rh-article-title-link" style="color: #378A30;" href="{{ $item['permalink'] }}">{{ $item['title'] }}</a>
                                        </h2>
                                        <p class="rh-article-published" style="color: #767676;">Publicerad: {{ $item['date'] }}</p>
                                        <p class="rh-article-description">
                                            {{ wp_trim_words(region_halland_remove_shortcode($item['content']), 20, '...') }}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="col-12 mt3" style="display: flex; justify-content: center;">
                                <a href="/nyheter" class="rh-button rh-button--secondary" aria-label="Visa fler nyheter" role="button" style="text-decoration: none;">Visa fler nyheter</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif

        @php($myBlurbs = get_region_halland_acf_main_post_page_links_blurbs(1571))
        @if(isset($myBlurbs))
            <div class="center" style="max-width: 1440px;">
                <ul class="clearfix center mb2 mt2" style="max-width:1440px;">
                    @foreach ($myBlurbs as $blurbs)
                        <li class="left-align col col-12 sm-col-6 md-col-6 lg-col-4">
                            <div class="mx1 my2" style="border-bottom: 4px solid #C3DCC1; border-left: 1px solid #E4E4E4; border-right: 1px solid #E4E4E4;">
                                <div style="height: 200px; overflow:hidden;position:relative">
                                    <img src="{!! $blurbs['image_url'] !!}" style="width:100%; position: absolute; top:50%; transform: translateY(-50%);">
                                </div>
                                <div class="mx2 pt2" style="height: 18ex; overflow:hidden;">
                                    <h3><a href="{{ $blurbs['link_url'] }}" target="{{ $blurbs['link_target'] }}" style="color:black;">{{ $blurbs['link_title'] }}</a></h3>
                                    <p>{{ $blurbs['post_content'] }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

    </main>

    @endwhile

@endsection