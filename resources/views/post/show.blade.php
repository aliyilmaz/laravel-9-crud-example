@extends('post.layout')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5">
                        <h2> Show Post</h2>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-4">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">< Back</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 margin-tb">
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
