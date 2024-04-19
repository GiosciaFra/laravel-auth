@extends('layouts.app')

@section('content')

<div class="container  py-5">
    <h1 class="text-center">Aggiungi un fumetto</h1>

    <form action="{{route('projects.store')}}" method="POST" class="d-flex flex-column gap-4 " >
        @csrf

        <div>
          <label for="title" class="form-label">Nome progetto</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="textarea" class="form-control" id="description" name="description" required></textarea>
        </div>

        <div>
            <label for="img" class="form-label">Aggiungi una URL </label>
            <input type="text" class="form-control" id="img" name="img">
        </div>

        <div>
            <label for="used_technologies" class="form-label">Tecnologie utilizzate</label>
            <input type="text" class="form-control" id="used_technologies" name="used_technologies" required>
        </div>

        <div>
            <label for="url" class="form-label">Link repo</label>
            <input type="text" class="form-control" id="url" name="url" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4 w-25 ">Aggiungi Progetto</button>
    </form>

    <a href="{{route('projects.index')}}" class="btn btn-success mt-4">Torna ai miei progetti</a>
</div>
    
@endsection