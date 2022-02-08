@extends('layouts.app')
@section('title','Blog')
@section('content')
<section class="container col-md-6">
<h1 class="text text-dark text-center">Titulo - {{$post->title}}</h1>
<hr class="dropdown-divider">
<div class="container show">
    <p class=" text text-justify">
        {{$post->content}}
    </p>
</div>


@endsection