@extends('layouts.pyrolab')
@section('htmlHeaderTitle')
  Pyrolab Crear Items
@endsection
@section('content')
  <h1>Agregar Item</h1>
  <form class="" action="/items/add" method="post">
    {{ csrf_field() }}
    <label for="code">Código</label>
    <input type="text" name="code" id="code" value="{{old('code')}}">
    @if ($errors->has('code'))
      <div class="alert alert-danger">
          <ul>
            @foreach ($errors->get('code') as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
      </div>
    @endif
    <button type="submit" name="button">Enviar</button>
  </form>
@endsection
