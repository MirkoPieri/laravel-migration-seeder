@extends('layoute.layoute')


@section('content')
  <div class="container">
    <div class="link">
      <a href="{{ route('place.Index') }}"><img src="image/cartella.png" alt="folder">PLACE LIST</a>
    </div>

    <div class="link">
      <a href="{{ route('employee.index') }}"><img src="image/cartella.png" alt="folder">EMPLOYEE LIST</a>
    </div>
  </div>
@endsection
