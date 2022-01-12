<?php
?>

@foreach($listQuestion as $key => $value)
    <h1 style="color: red">
        {{$value['class_name']}}
    </h1>
    @foreach($value["questions"] as $k => $q)
        <h5 style="color: darkblue; font-weight: bold">Câu {{$k+1}}  .  {{$q["content"]}} </h5>
        <ul>
            @foreach($q["testAnswer"] as $as)
                <li>{{$as["id"]}} . {{$as["content"]}}</li>
            @endforeach
        </ul>
    @endforeach

@endforeach
