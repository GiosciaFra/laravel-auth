@extends('layouts.app')

@section('content')

<div class="container  py-5">
    <h1 class="text-center">Aggiungi un fumetto</h1>

    <form action="{{route('projects.store')}}" method="POST" class="d-flex flex-column gap-4 " >
        @csrf

        <div>
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="textarea" class="form-control" id="description" name="description" required></textarea>
        </div>

        <div>
            <label for="thumb" class="form-label">Aggiungi una URL </label>
            <input type="text" class="form-control" id="img" name="img">
        </div>

        <div>
            <label for="series" class="form-label">Tecnologie utilizzate</label>
            <input type="text" class="form-control" id="used_technologies" name="used_technologies" required>
        </div>

        <div>
            <label for="type" class="form-label">Link repo</label>
            <input type="text" class="form-control" id="url" name="url" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4 w-25 ">Aggiungi</button>
    </form>
</div>
    
@endsection