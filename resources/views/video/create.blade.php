@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Vidoe') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('video.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="title" >{{ __('Video Title') }}</label>

                            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="url" >{{ __('Video url') }}</label>

                            <input id="url" type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}" required autofocus>
                            @if ($errors->has('url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Create Video</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
