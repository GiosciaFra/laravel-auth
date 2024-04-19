@extends ('layouts.app')

@section('content')

<div class="container py-5">
    <h1>Aggiungi un progetto </h1>

    <form action="{{route('projects.update', $project->id)}}" method="POST" class="d-flex flex-column gap-4 " >
        @csrf
        @method('PUT')


        <div>
          <label for="name" class="form-label">Nome progetto</label>
          <input type="text" class="form-control" id="name" name="name" value='{{$project->name}}' required>
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="textarea" class="form-control" id="description" name="description" required> {{$project->description}}</textarea>
        </div>

        <div>
            <label for="img" class="form-label">Aggiungi una URL per inserire la copertina</label>
            <input type="text" class="form-control" id="img" name="img" value='{{$project->img}}'>
        </div>

        <div>
            <label for="used_technologies" class="form-label">Tecnologie utilizzate</label>
            <textarea type="textarea" class="form-control" id="used_technologies" name="used_technologies" required> {{$project->used_technologies}}</textarea>
        </div>

        <div>
            <label for="url" class="form-label">Link repo</label>
            <input type="text" class="form-control" id="url" name="url" value='{{$project->url}}' required>
        </div>

        <div class="d-flex gap-5 justify-content-center  ">

            <button type="submit" class="btn btn-warning text-white ">Salva la tua modifica</button>
            
            <a href="{{route('projects.index')}}" class="btn btn-success">Torna alla lista dei progetti</a>
        </div>

    </form>
</div>
</div>
    
@endsection