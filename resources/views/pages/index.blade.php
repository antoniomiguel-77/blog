@extends('layouts.app')
@section('title','Blog')
@section('content')
<section class="container col-md-6">
<h1 class="text text-dark text-center">Postagens</h1>
<hr class="dropdown-divider">

@if (count($posts) > 0)
  

@foreach ($posts as $post )
  

<div class=" mt-4 container">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success">Autor: {{$post->user->name}}</strong>
        <h3 class="mb-0">Titulo: {{$post->title}}</h3>
        <div class="mb-1 text-muted">Data: {{$post->date}}</div>
        <p class="mb-auto text text-justify">{{$post->content}}</p>
        <a href="postagem/{{$post->id}}" class="btn btn-dark">Continuar Lendo</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="{{asset('storage/images/'.$post->image)}}" style="width:250px" alt="{{$post->title}}">
      </div>
    </div>
  </div>
</div>
@endforeach
@else
    <h4 class="text text-warning">Nenhum postagem feita... <a href="postagem.novo"><small>Postar?</small> </a></h4>
@endif


</section>
@endsection
