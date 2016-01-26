@if ($type == 'css')
	@if(!is_null($theme))
    	<link href='{{ asset("assets/bootstrap/$version/css/bootstrap-$theme.min.css") }}' rel='stylesheet' type='text/css'>
	@else
    	<link href='{{ asset("assets/bootstrap/$version/css/bootstrap.min.css") }}' rel='stylesheet' type='text/css'>
    @endif
@elseif ($type == 'js')
    <script src='{{ asset("assets/bootstrap/$version/js/bootstrap.min.js") }}'></script>
@endif