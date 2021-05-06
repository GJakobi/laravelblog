@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/11/23/14/45/coding-1853305_960_720.jpg" alt="" width="700">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{$post->title}}
            </h2>

            <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{$post->user->name}}</span>, Created on {{date('jS M Y', strtotime($post->updated_at))}}
        </span>

            <p class="text-cl text-gray-700 pt-8 pb-10 leading-B font-light">
                {{$post->description}}
            </p>

            <a href="/blog/{{$post->slug}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>
        </div>
    </div>
@endforeach

@endsection
