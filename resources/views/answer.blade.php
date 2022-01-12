<?php
$i = 0;
?>
<h1>Do test Id : {{$DoTestId}}</h1>
<h2>form id {{$formId}}</h2>
<p>{"protocol":"json","version":1}
</p>
    @foreach($questionIds as $key => $qid)
<p>{"arguments":["{{$DoTestId}}",{{$qid}},"[1]"],"invocationId":"{{$key}}","target":"UpdateAnswerClass","type":1}</p>
    @endforeach


<p> {"arguments":["{{$DoTestId}}"],"invocationId":"8","target":"EndTestClass","type":1}    </p>

<p>Ws : {{$ws}}</p>
