<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/dataStyle.css')}}">
</head>
<body>

<h1>HasMany</h1>
<div class="Wrapper">
    @foreach($users as $user)
        <div class="UserDiv">
            <strong>{{$user->name}}  {{$user->second_name}}</strong>
            @foreach($user->posts as $post)
                <menu>
                    <li>{{$post->message}} </li>
                </menu>
            @endforeach
        </div>
    @endforeach


</div>

<p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
<h1>BelongTo</h1>
<div class="Wrapper2">
    @foreach($data as $d)
        <div class="UserDiv2">
            {{$d->name}}
        <menu>
            <strong><li>{{$d->user->name}} ({{$d->user->id}})</li></strong>
        </menu>
        </div>
    @endforeach

</div>
</body>
</html>