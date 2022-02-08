@extends('layouts.app')
@section('title','Blog')
@section('content')
<section class="mt-4 container col-md-6">
    <h3 class=" text text-dark text-center " >Criar Postagem</h3>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        <p class="text text-success text-center"> {{session('success')}}</p>
    </div>

    @endif
    <hr class="dropdown-divider">
    <form action="{{$action}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Titulo:</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div>
            <label for="content">Conteúdo:</label>
            <textarea name="content" style="resize: none" id="content" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div>
            <label for="image">Imagen:</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div>
            <button class="col-12 btn btn-dark mt-2" type="submit">Postar</button>
        </div>
    </form>
</section>
  @endsection