<?php
$i = 0;
?>


    @foreach($class_questions as $k => $q)
        <?php
        $i++;
        ?>
        <h5 style="color: darkblue; font-weight: bold">Câu {{$i}} .  {{$q["content"]}} </h5>
        <ul>
            @foreach($q["question"] as $as)
                @if($q["answer"] == $as["id"])
                    <li style="background-color: yellow; font-weight: bolder ; " >{{$as["id"]}} . {{$as["content"]}} @if($as["isCheck"]==true) <span style="color: red">Bạn chọn</span> @endif </li>
                @else
                    <li style="font-weight: bolder ; " >{{$as["id"]}} . {{$as["content"]}} @if($as["isCheck"]==true) <span style="color: red">Bạn chọn</span> @endif
                        @if($q["answer"]!= $as["id"] && $as["isCheck"]==true) <span style="background-color: red">Bạn Sai câu này</span> @endif
                    </li>
                @endif
            @endforeach
        </ul>
    @endforeach


