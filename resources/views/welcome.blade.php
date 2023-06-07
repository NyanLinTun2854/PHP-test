@php
   $data = ['apple', 'orange', 'pineapple', 'watermalo'] 
@endphp

<h1>{{'Nyan Lin Tun'}}</h1>

<ul>
@foreach ($data as $item)
    <li>{{$item}}</li>
@endforeach
</ul>