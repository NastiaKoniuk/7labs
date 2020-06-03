<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>

    @foreach($test as $t)
        <a href="http://homestead.test/pages/{{$t->url}}">
            <li>{{$t->caption}}</li>
        </a>
        @foreach($t->children as $c)
            <ul>
                <a href="http://homestead.test/pages/{{$c->url}}">
                    <li>{{$c->caption}}</li>
                </a>
                @foreach($c->children as $y)
                    <ul>
                        <a href="http://homestead.test/pages/{{$y->url}}">
                            <li>{{$y->caption}}</li>
                        </a>
                        @foreach($y->children as $x)
                            <ul>
                                <a href="http://homestead.test/pages/{{$x->url}}">
                                    <li>{{$x->caption}}</li>
                                </a>
                            </ul>
                        @endforeach
                    </ul>
                @endforeach
            </ul>
        @endforeach
    @endforeach

</ul>
</body>
</html>
