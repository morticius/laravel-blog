@extends('layouts.app')

@section('title', $category->title)
@section('meta_keyword', $category->meta_keyword)
@section('meta_description', $category->meta_description)

@section('content')
    <div class="container">


        @forelse($articles as $article)
            <div class="row">
                <div class="col-sm-12">
                    <h2><a href="{{route('article', $article->slug)}}">{{$article->title}}</a></h2>
                    <p>{!! $article->description_short !!}</p>
                </div>
            </div>
        @empty
            <h2 class="text-center">Empty</h2>
        @endforelse

        {{$articles->links()}}

    </div>

@endsection
