@extends('layouts.app')
@section('title','Blog')
@section('content')
<section class="mt-4 container col-md-4">
    <h3 class="text text-dark">Login</h3>
    <hr class="dropdown-divider">
    @foreach ($errors->all() as $error )
    <div class="alert alert-danger" role="alert">
        <p class="text text-danger text-center"> {{$error}}</p>
    </div>
    @endforeach
    <form method="POST" action="{{$action}}">
        @csrf
            <div>
                <label for="email" class="col-md-4 ">E-Mail:</label>
                <input id="email" type="email" class="form-control"   name="email" >
            </div>
   
            <div>
                <label for="password" class="col-md-4 ">Password:</label>
                <input id="password" type="password" class="form-control"   name="password"  >
            </div>
            <div >
                <button type="submit" class="btn btn-dark col-md-12 mt-1">
                    Entrar
                </button>
            </div>
         
    </form>
    <p class="mt-2 text text-center">Esqueceu sual password?<a href="#" class="link-item text text-center">redefinir</a></p>

</section>
  @endsection