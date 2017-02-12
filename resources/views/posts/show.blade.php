@extends('layouts.master')

@section('title', '文章詳細頁面')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ asset('img/post-bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>Post {{ $post->id }}</h1>
                    <h2 class="subheading">{{ $post->title }}</h2>
                    <span class="meta">Posted by <a href="#">Start Bootstrap</a> on {{ $post->created_at }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </div>
</article>
@endsection
