<h1>Home</h1>
{!!  date('d m y') !!}<br> 
@php
    $a = 1;
@endphp
@if($a>10)
{{ "greater than 10 "}}
@else
{{ "value not greater than 10 "}}
@endif

<br>
@for($i=1;$i<=10;$i++)
{{ $i }}<br>
@endfor