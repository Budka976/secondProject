@extends('app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Post
                            <a href="{{url('/posts')}}" class="btn btn-success float-end">back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('post')}}" method="POST">
                            {{-- cross site request forgery --}}
                            {{-- laravel deer post hiihdee zaawal csrf hiih yostoi ene ni nuutslaliin shinjtei --}}
                            @csrf
                            <div class="mb-3">
                                <label for="">title</label>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="">description</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="">Is public or Private</label>
                                <input type="checkbox" name="status">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    save
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection