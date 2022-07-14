@extends('post.layout')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center mt-5">
                        <h2>Laravel 9 CRUD Example</h2>
                    </div>
                </div>
                <div class="col-md-12 text-end mt-4">
                    <a class="btn btn-primary" href="{{ route('posts.create') }}"> + Create New Post</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 margin-tb">

            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-3">
                    <span>{{ $message }}</span>
                </div>
            @endif

            <table class="table table-bordered mt-4">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Body</th>
                    <th width="180px">Action</th>
                </tr>
                @foreach ($post as $post)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td width="30%">
                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                            <a class="btn btn-info btn-sm text-white" href="{{ route('posts.show',$post->id) }}">Show</a>

                            <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
