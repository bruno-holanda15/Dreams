@extends('home')

@section('main')
<main>
    <div class="mt-2 d-flex justify-content-center">
        <form action="{{ url('/store') }}" method="post">
            @csrf
              <div class="form-group">
                  <label for="titulo">Titulo</label>
                  <input class="form-control" type="text" id="titulo">
              </div>
      
              <div class="form-group">
                  <label for="descricao">Conte seu sonho</label>
                  <!-- <input class="form-control" type="text" id="descricao"> -->
                  <textarea name="descricao" class="form-control" type="text" id="descricao" cols="30" rows="5"></textarea>
              </div>
      
              <button type="submit" class="btn btn-primary">Salvar</button>
      
          </form>
        @error('title')
            <div  class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</main>
@endsection
