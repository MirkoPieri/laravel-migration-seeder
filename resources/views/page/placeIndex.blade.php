@extends('layoute.layoute')

@section('content')

  <a href="{{ route('place.create') }}">CREATE NEW ITEM</a>
  <div class="container">
    @foreach ($place as $value)
      <div class="box">
        <p>{{$value -> name}}</p>
        <p>{{$value -> address}}</p>
        <p>{{$value -> city}}</p>
        <p>{{$value -> nation}}</p>
      </div>
    @endforeach
  </div>

@endsection
