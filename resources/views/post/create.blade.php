@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('post.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="title" >{{ __('Post Title') }}</label>

                            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="body" >{{ __('Post Body') }}</label>
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
