@extends('layouts.app')
@section('title','Blog')
@section('content')
<section class="mt-4 container col-md-12">
    <div id="layoutSidenav_content">
        <main>
    <div class="container-fluid">
        <h1 class="mt-4">Painel Administrativo</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Bem-Vindo: {{Auth::User()->name}} </li>
        </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Quantidade de Usuários {{count($users)}}</div>
            </div>
        </div>
                     
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Quantidade de Postagens {{count($posts)}}</div>
            </div>
        </div>
<div class=" mb-4">
<div class="card-header"><i class="fas fa-table mr-1"></i>Usuarios</div>

    
    <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class="text text-center">
                <th>[#ID]</th>
                <th>[NAME]</th>
                <th>[EMAIL]</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr class="text text-center">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach ()
            
            
        </tbody>
    </table>

    
</div>

<div class=" mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Postagens</div>
    
            
            <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text text-center">
                        <th>[#ID]</th>
                        <th>[TITULO]</th>
                        <th>[CONTEÚDO]</th>
                        <th>[IMAGEN]</th>
                        <th>[OPERAÇÃO]</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post )
                    <tr class="text text-center">
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td><img src="{{asset('storage/images/'.$post->image)}}" style="width:30px" alt=""></td>

                        <td>
                            <a href="" class="btn btn-danger fa fa-trash"></a>
                        </td>
                    </tr>
                    @endforeach ()
                    
                    
                </tbody>
            </table>

            
        </div>



        </main>
            
</section>
@endsection