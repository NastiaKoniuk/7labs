<ul>
    @foreach($category as $c)
        <form action="http://homestead.test/delete/{{$c->id}}">
            <a href="http://homestead.test/update/{{$c->id}}">{{$c->caption}}</a>
            <button class="btn btn-outline-danger" style="margin-left: 20px">X</button>
        </form>
    @if($c->children->count()>0)
    @include('includes.catalog',['category'=>$c->children])
    @endif
    @endforeach
</ul>