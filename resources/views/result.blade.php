<?php
$i = 0;
?>


    @foreach($class_questions as $k => $q)
        <?php
        $i++;
//        {{ htmlspecialchars(trim(strip_tags($q["content"])))}}
        ?>
        <h5 style="color: darkblue; font-weight: bold">Câu {{$i}} . {!! $q["content"] !!}   </h5>
        <ul>
            @foreach($q["question"] as $as)
{{--                @if($q["answer"] == $as["id"])--}}
{{--                    <li style="background-color: yellow; font-weight: bolder ; " >{{$as["id"]}} . {{$as["content"]}} @if($as["isCheck"]==true) <span style="color: red">Bạn chọn</span> @endif </li>--}}
{{--                @else--}}
                @if($as["isCheck"]==true)
                    <li style="font-weight: bolder ; background-color: yellow " >{{$as["id"]}} . {{$as["content"]}}
                    </li>
                @else
                    <li style="font-weight: bolder ; " >{{$as["id"]}} . {{$as["content"]}}
                    </li>
                @endif
{{--                @endif--}}
            @endforeach
        </ul>
    @endforeach



