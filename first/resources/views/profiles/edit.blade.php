@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="ro"><h1>Edit Profile</h1>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label ">New Title</label>

                        <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('Title') ?? $user->profile->title }}"  autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label ">New Description</label>

                        <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" description="description" value="{{ old('description') ??$user->profile->description }}"  autocomplete="description" autofocus>

                         @error('description')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>



                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label ">New URL</label>

                        <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror" url="url" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url" autofocus>

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Edit Profile Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>


                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile Changes</button>

                    </div>

                </div>
            </div>



        </form>
    </div>
@endsection
