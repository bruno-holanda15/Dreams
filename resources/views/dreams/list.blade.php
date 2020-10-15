@extends('home')

@section('main')

    <div class="container mt-2 mb-2 col-8">
        <ul class="list-group">
            
            @foreach($sonhos as $sonho)
                <li class="list-group-item">Titulo: {{ $sonho->titulo}}</li>
            @endforeach
    
        </ul>
    </div>

@endsection
