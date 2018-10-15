@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">title</th>
                            <th scope="col">User</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <th>{{  $loop->index+ 1 }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td><a href="#" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Delete</a> <a href="{{ route('post.show',$post->id) }}" class="btn btn-secondary">View</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
