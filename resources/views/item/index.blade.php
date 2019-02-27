@extends('layouts.pyrolab')
@section('htmlHeaderTitle')
  Pyrolab Items
@endsection
@section('content')
  @foreach ($items as $item)
    <br>
    Code: {{$item->code}} Name: {{$item->name}}
    <br>
  @endforeach
  {{$items->links()}}
@endsection
