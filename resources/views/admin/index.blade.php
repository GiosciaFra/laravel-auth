@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Admin page</h1>

        <h2>Benvenuto {{$user->name}}</h2>

        <div>
            
            <a href="{{route('admin.projects.index')}}">Vai ai miei progetti</a>
        </div>
    </div>
@endsection