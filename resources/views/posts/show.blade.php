@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 40px;" alt="">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}"><span class="font-weight-bold text-dark">{{ $post->user->username }}</span></a>
                        <a href="#" class="pl-3">Follow</a>
                    </div>
                </div>      
            </div>
            <hr>
            <p><a href="/profile/{{ $post->user->id }}"><span class="font-weight-bold text-dark">{{ $post->user->username }}</span></a> {{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection



