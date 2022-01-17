<?php
$i = 0;
?>
<h1>Do test Id : {{$DoTestId}}</h1>
<h2>form id {{$formId}}</h2>
<p>{"protocol":"json","version":1}
</p>
@foreach($questionIds as $key => $qid)
    <p>{"arguments":["{{$DoTestId}}",{{$qid}},"[1]"],"invocationId":"{{$key}}
        ","target":"UpdateAnswerClass","type":1}</p>
@endforeach


<p> {"arguments":["{{$DoTestId}}"],"invocationId":"30","target":"EndTestClass","type":1} </p>

<p>Ws : {{$ws}}</p>


<script>
    let socket = new WebSocket("{{$ws}}");
    socket.onopen = function (e) {

        console.log("Sending message");
        socket.send('{"protocol":"json","version":1}');
        @foreach($questionIds as $key => $qid)
        socket.send('{"arguments":["{{$DoTestId}}",{{$qid}},"[1]"],"invocationId":"{{$key}}","target":"UpdateAnswerClass","type":1}');
        @endforeach
        socket.send('{"arguments":["{{$DoTestId}}"],"invocationId":"30","target":"EndTestClass","type":1}');
    };

    socket.onmessage = function (event) {
        console.log(`[message] Data received from server: ${event.data}`);
    };

    socket.onclose = function (event) {
        if (event.wasClean) {
            console.log(`[close] Connection closed cleanly, code=${event.code} reason=${event.reason}`);
        } else {
            // e.g. server process killed or network down
            // event.code is usually 1006 in this case
            console.log('[close] Connection died');
        }
    };
    // socket.close()

    socket.onerror = function (error) {
        console.log(`[error] ${error.message}`);
    };
    setTimeout(openResult, 500)

    function openResult() {
        window.open("http://listq.test/resultByID/{{$DoTestId}}", "_blank")

    }

</script>
