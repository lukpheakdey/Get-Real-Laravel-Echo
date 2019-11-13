<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('2ec5ece4f1cff2bec3a0', {
            cluster: 'mt1',
            forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('form-submitted', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
</head>
<body>
@extends('layouts')

@section('content')
    <h1>Pusher Test</h1>
    <p>
        Try publishing an event to channel <code>my-channel</code>
        with event name <code>my-event</code>.
    </p>
@endsection
</body>