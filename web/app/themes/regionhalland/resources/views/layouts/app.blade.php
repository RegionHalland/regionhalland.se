<!doctype html>

<html data-server="{!! env('SITE_SERVER') !!}" data-version="1.4.0" style="height: 101%;" @php(language_attributes())>
	
	@include('partials.head')
	
	<body style="height: 101%" @php(body_class())>
		
		@include('partials.site-message')
        @include('partials.jump-to-content')
		@include('partials.cookie-notice')

		@include('partials.header')

		@yield('content')

		@include('partials.footer')

	</body>

</html>