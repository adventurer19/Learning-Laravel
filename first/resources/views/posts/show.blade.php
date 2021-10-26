@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" class="w-100" alt="/views/errors/no-imageava.jpg" >
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100 " style="max-width: 25px">
                        </div>
                        <div>
                            <div class="font-weight-bold"><a href="/profile/{{$post->user->id}}">{{$post->user->username}}</a>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <p><span class="font-weight-bold"><a href="/profile/{{$post->user->id}}"> {{$post->user->username}}</a>
                            {{$post->caption}}
                        </span></p>

                </div>
            </div>
        </div>
    </div>



@endsection
