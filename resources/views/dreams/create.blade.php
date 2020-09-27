@extends('home')

@section('main')
<main>
    <div class="mt-2 d-flex justify-content-center">
        <form action="/store" method="post">
            @csrf
              <div class="form-group">
                  <label for="titulo">Titulo</label>
                  <input class="form-control" name="titulo" type="text" id="titulo">
              </div>
      
              <div class="form-group">
                  <label for="descricao">Conte seu sonho</label>
                  <input class="form-control" type="text" name="descricao" id="descricao">
                  <!-- <textarea name="descricao" class="form-control" type="text" id="descricao" cols="30" rows="5"></textarea> -->
              </div>
      
              <button type="submit" class="btn btn-primary">Salvar</button>
      
          </form>
        @error('titulo')
            <div  class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('descricao')
            <div  class="alert alert-danger">{{ $message }}</div>
        @enderror
        <!-- @if($errors->any()) 
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif -->
    </div>
</main>
@endsection
