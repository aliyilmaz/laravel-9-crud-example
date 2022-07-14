@extends('post.layout')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-start mt-5">
                    <h2>Add New Post</h2>
                </div>
            </div>
            <div class="col-md-12 text-end mt-4">
                <a class="btn btn-primary" href="{{ route('posts.index') }}">< Back</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <br>
                        <div class="form-group">
                            <strong>Body:</strong>
                            <textarea class="form-control" style="height:150px" name="body" placeholder="Body"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
