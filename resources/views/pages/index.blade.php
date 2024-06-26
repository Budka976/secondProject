@extends('app')

@section('content')
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        <h4>
                            <a href="{{url('posts/create')}}" class="btn bnt-success float-end">Create Post</a>
                        </h4>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>description</th>
                                <th>status</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach($posts as $item)
                            <tr>
                                
                                <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>{{ $item->action }}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer text-body-secondary">
                        2 days ago
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection