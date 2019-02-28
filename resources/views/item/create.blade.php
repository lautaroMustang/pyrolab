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

    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{old('name')}}">
    @if ($errors->has('name'))
      <div class="alert alert-danger">
          <ul>
            @foreach ($errors->get('name') as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
      </div>
    @endif

    <label for="qtyProvPresentation">Cantidades en presentación Proveedor</label>
    <input type="number" name="qtyProvPresentation" id="qtyProvPresentation" value="{{old('qtyProvPresentation')}}">
    @if ($errors->has('qtyProvPresentation'))
      <div class="alert alert-danger">
          <ul>
            @foreach ($errors->get('qtyProvPresentation') as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
      </div>
    @endif

    <label for="providerPrice">Precio Proveedor</label>
    <input type="number" step="0.0001" name="providerPrice" id="providerPrice" value="{{old('providerPrice')}}">
    @if ($errors->has('providerPrice'))
      <div class="alert alert-danger">
          <ul>
            @foreach ($errors->get('providerPrice') as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
      </div>
    @endif

    <label for="standardPrice">Precio lista</label>
    <input type="number" step="0.0001" name="standardPrice" id="standardPrice" value="{{old('standardPrice')}}">
    @if ($errors->has('standardPrice'))
      <div class="alert alert-danger">
          <ul>
            @foreach ($errors->get('standardPrice') as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
      </div>
    @endif

    <button type="submit" name="button">Enviar</button>
  </form>
@endsection
