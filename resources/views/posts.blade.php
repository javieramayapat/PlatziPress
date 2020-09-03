@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- impirmir todos los post usanso una tarjeta como base-->
            @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="car-text">
                        {{$post->get_extract}}
                        <a href="{{ route('post',$post) }}">Leer mas</a>
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{$post->user->name}}
                        </em>

                        {{$post->created_at->format('d m Y')}}
                    </p>
                </div>
            </div>
            <br>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection