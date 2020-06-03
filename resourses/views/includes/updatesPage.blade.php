
@foreach($data as $d)
@section('url')
    <form action="/update/new/{{$d->id}}/url" method="post">
        @csrf
        <div class="form-group">
            <label for="url">Url</label>
            <input type="text" name="url" placeholder="Enter new url" id="url" class="form-control">
        </div>
        <button type="submit" class="btn-success">Update</button>
    </form>
    @endsection

@section('intro')
    <form action="/update/new/{{$d->id}}/intro" method="post">
        @csrf
        <div class="form-group">
            <label for="intro">Intro</label>
            <input type="text" name="intro" placeholder="Enter new intro" id="intro" class="form-control">
        </div>
        <button type="submit" class="btn-success">Update</button>
    </form>
@endsection

@section('caption')
    <form action="/update/new/{{$d->id}}/caption" method="post">
        @csrf
        <div class="form-group">
            <label for="caption">Caption</label>
            <input type="text" name="caption" placeholder="Enter new caption" id="caption" class="form-control">
        </div>
        <button type="submit" class="btn-success">Update</button>
    </form>
@endsection

@section('content')
    <form action="/update/new/{{$d->id}}/content" method="post">
        @csrf
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" name="content" placeholder="Enter new content" id="content" class="form-control">
        </div>
        <button type="submit" class="btn-success">Update</button>
    </form>
@endsection
@section('parent_id')
    <form action="/update/new/{{$d->id}}/parent_id" method="post">
        @csrf
        <div class="form-group">
            <label for="parent_id">Parent ID</label>
            <input type="text" name="parent_id" placeholder="Enter new parent ID" id="parent_id" class="form-control">
        </div>
        <button type="submit" class="btn-success">Update</button>
    </form>
@endsection
@endforeach
