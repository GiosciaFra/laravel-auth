@extends('layouts.app')

@section('content')
<div class="container py-5 d-flex flex-column justify-content-center w-50 ">
    <h1 class="text-center pb-4">{{$project->name}}</h1>
    <img src="{{$project->img}}" alt="" class="img-fluid">
    <p><strong>Descrizione: </strong>{{$project->description}}</p>
    <p><strong>Tecnologie utilizzate: </strong>{{$project->used_technologies}}</p>

    


</div>
    
@endsection