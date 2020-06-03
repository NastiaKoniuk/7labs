
@foreach($category as $c)
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">url <a href="http://homestead.test/update/{{$c->id}}/url">Edit</a></th>
        <th scope="col">caption <a href="http://homestead.test/update/{{$c->id}}/caption">Edit</a> </th>
        <th scope="col">intro <a href="http://homestead.test/update/{{$c->id}}/intro">Edit</a> </th>
        <th scope="col">content <a href="http://homestead.test/update/{{$c->id}}/content">Edit</a> </th>
        <th scope="col">parent_id <a href="http://homestead.test/update/{{$c->id}}/parent_id">Edit</a> </th>
    </tr>
    </thead>
    <tr>
        <th scope="row">{{$c->id}}</th>
        <td>{{$c->url}}</td>
        <td>{{$c->caption}}</td>
        <td>{{$c->intro}}</td>
        <td>{{$c->content}}</td>
        <td>{{$c->parent_id}}</td>
    </tr>
    @if($c->children->count()>0)
        @include('includes.updateCatalog',['category'=>$c->children])
    @endif
@endforeach
