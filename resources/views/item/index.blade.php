@extends('layouts.pyrolab')
@section('htmlHeaderTitle')
  Pyrolab Items
@endsection
@section('content')
  @foreach ($items as $item)
    <br>
    Código: {{$item->code}} Nombre: {{$item->name}}
    Presentacion Proveedor: {{$item->qtyProvPresentation}}
    Precio Proveedor: {{$item->providerPrice}}
    Precio lista: {{$item->standardPrice}}
    <br>
  @endforeach
  {{$items->links()}}
@endsection
