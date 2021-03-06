@extends('layoute.layoute')

@section('content')


  <div class="container">
    <div class="buttons">
      <div class="button">
        <a href="{{ route('index.home') }}">HOME</a>
      </div>
      <div class="button">
        <a href="{{ route('place.create') }}">CREATE NEW ITEM</a>
      </div>
    </div>

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
