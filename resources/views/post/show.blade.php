@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><div class=""><h4>{{ $post->title }}</h4></div><div class="right"><a href="#">{{ $post->user->name }}</a></div></div>

                <div class="card-body">
                        {{ $post->body }}
                </div>
            </div>
        </div>
    </div>

    <div class="row " style="margin-top:25px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">comments</div>

                <div class="card-body">
                    @forelse ($post->comments as $comment)
                    <div class="card">
                        <div class="card-body" >
                           <div class="float-left">
                                <h5>{{ $comment->body }}</h5>
                           </div>
                           <div class="float-right">
                               <a href="">{{ $comment->user->name }}</a>
                           </div>
                        </div>
                    </div>
                    @empty

                    @endforelse
                    <form method="POST" action="{{  route('comment.create',$post->id) }}">
                        @csrf

                        <input type="hidden" name="commentable_type" value="Post">
                        <div class="form-group">
                            <label for="body" >{{ __('Give a Comment') }}</label>
                            <textarea class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" id="body"  name="body" rows="3" required>{{ old('title') }}</textarea>
                            @if ($errors->has('body'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Create Post</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
