	{{--
    HSA KONTAKTKORT
    beroende av plugin rhkontaktkort
  --}}


 @if(function_exists('rh_hsafrontend'))
  	{!! rh_hsafrontend(get_the_ID()) !!}
  @endif
 
