@if ($type == 'css')
    <link href='{{ asset("assets/bootstrap/$version/css/bootstrap.min.css") }}' rel="stylesheet">
@elseif ($type == 'js')
    <script src='{{ asset("assets/bootstrap/$version/js/bootstrap.min.js") }}'></script>
@endif