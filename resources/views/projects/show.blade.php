@extends('layouts.app')

@section('content')
<div class="container py-5 d-flex flex-column justify-content-center w-50 ">
    <h1 class="text-center pb-4">{{$project->name}}</h1>
    <img src="{{$project->img}}" alt="" class="img-fluid">
    <p><strong>Descrizione: </strong>{{$project->description}}</p>
    <p><strong>Tecnologie utilizzate: </strong>{{$project->used_technologies}}</p>

    <div class="d-flex justify-content-center gap-4">

        <a href="{{route('projects.edit', $project->id)}}" class="btn btn-warning text-white  ">Modifica il progetto</a>
        <a href="{{route('projects.index')}}" class="btn btn-success">Torna alla lista dei progetti</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina questo progetto</button>
    </div>
    
    <!-- Modale -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina questo fumetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro di voler eliminare questo fumetto?
                    <br>
                    {{$project->name}}
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                        @csrf
                        @method("DELETE")

                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
    
@endsection