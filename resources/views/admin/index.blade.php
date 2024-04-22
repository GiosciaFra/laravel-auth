@extends('layouts.app')

@section('content')
    <div class="container py-5 text-center ">
        <h1>Admin page</h1>

        <h2 class="pt-5">Benvenuto {{$user->name}}</h2>

        <div class="pt-5">
            
            <a href="{{route('admin.projects.index')}}" class="btn btn-outline-info p-3 ">Vai ai miei progetti</a>
        </div>
    </div>
@endsection