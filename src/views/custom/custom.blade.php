@if ($type == 'css')
    <link href='{{ asset("custom/css/custom.css") }}' rel='stylesheet' type='text/css'>
@elseif ($type == 'js')
    <script src='{{ asset("custom/js/custom.js") }}'></script>
@endif