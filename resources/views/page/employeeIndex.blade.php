@extends('layoute.layoute')

@section('content')

  <div class="container">
    <div class="buttons">
      <div class="button">
        <a href="{{ route('index.home') }}">HOME</a>
      </div>
      <div class="button">
        <a href="{{ route('employee.create') }}">CREATE NEW ITEM</a>
      </div>
    </div>

    @foreach ($employee as $value)
      <div class="box">
        <p>{{$value -> firtname}}</p>
        <p>{{$value -> lastname}}</p>
        <p>{{$value -> birthDay}}</p>
        <p>{{$value -> jobTitle}}</p>
        <p>{{$value -> salary}}</p>
        <div class="bott">
          <a href="{{ route('employee.edit', $value -> id) }}">EDIT</a>
          <a href="{{ route('employee.destroy', $value -> id) }}">DELETE</a>
        </div>
      </div>
    @endforeach
  </div>

@endsection
