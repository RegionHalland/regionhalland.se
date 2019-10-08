<article class="rh-search-elements">
	<h2 class="h3">
		<a href="{{ $post['permalink'] }}" title="" class="rh-search-elements-title" style="color:black">
		{{ $post['title'] }}
		</a>
	</h2>
	<span class="rh-search-elements-inline pb1">Publicerad: 
		<time itemprop="datePublished" datetime="{{ $post['date'] }}">{{ $post['date'] }}</time>
	</span>
	@if($post['ingress'])
		<p class="rh-search-elements-description">
			{{ html_entity_decode(wp_trim_words($post['ingress'], 50, '...')) }}
		</p>
	@else
		<p class="rh-search-elements-description">
			{{ html_entity_decode(wp_trim_words($post['content'], 50, '...')) }}
		</p>
	@endif
	@foreach($post['terms'] as $term)
		<a href="{{ $term['link'] }}" class="rh-labels" style="text-decoration:none">{{ $term['name'] }}</a>
	@endforeach	
</article>