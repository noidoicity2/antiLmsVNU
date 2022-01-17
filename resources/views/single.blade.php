<?php
$i = 0
?>


    @foreach($class_questions as $k => $q)
        <?php
        $i++;
        ?>
        <h5 style="color: darkblue; font-weight: bold">Câu {{$i}} .  {!! $k!!}   </h5>
        <ul>
            @foreach($q as $as)
                <li>{{$as["id"]}} . {{$as["content"]}}</li>
            @endforeach
        </ul>
    @endforeach


