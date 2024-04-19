@extends('layouts/app')

@section('content')
<div class="container py-5 ">
    <h1 class="mb-3">Elenco dei miei progetti</h1>

    <table class="table mb-5 ">
        <thead>
            <tr>
                <th class="col">Nome</th>
                <th class="col">Descrizione</th>
                <th class="col">Tecnologie utilizzate</th>
                <th class="col">Link progetto</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>

                <td>{{$project->name}}</td>
                <td>{{$project->used_technologies}}</td>

                <td><a href="{{$project->url}}">Vedi i miei progetti!</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection