<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/PagesStyle.css')}}">
</head>
<body>
<header>
    @if($eng == false)
    <nav am-layout="horizontal">
        <a href="http://homestead.test/pages/animal">Животные</a>
        <a href="http://homestead.test/pages/sport">Спорт</a>
        <a href="http://homestead.test/pages/business">Бизнес</a>
        <a href="http://homestead.test/pages/education">Образование</a>
        <a href="http://homestead.test/pages/eng" class="EngA">Английская версия</a>
        <a href="http://homestead.test/category">Category</a>
    </nav>
    @elseif($eng == true)
        <nav am-layout="horizontal">
            <a href="http://homestead.test/pages/eng/animal">Animal</a>
            <a href="http://homestead.test/pages/eng/sport">Sport</a>
            <a href="http://homestead.test/pages/eng/business">Business</a>
            <a href="http://homestead.test/pages/eng/education">Education</a>
            <a href="http://homestead.test/pages" class="RusA">Russian version</a>
        </nav>
        @endif
</header>
<main>
    <article>
        <section>
            @yield('content')
        </section>
    </article>
</main>
<footer>
    <p align="center">Footer</p>
</footer>
</body>
</html>