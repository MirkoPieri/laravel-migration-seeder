@extends('layoute.layoute')

@section('content')

  <div class="container">

    <div class="button">
        <a href="{{ route('place.Index') }}">BACK</a>
    </div>

      <div class="edit">
        <form method="post" action="{{ route('place.store') }}">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" value="">
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" value="">
          </div>
          <div class="form-group">
            <label for="nation">Nation</label>
            <input type="text" name="nation" value="">
          </div>
          <button type="submit">Save</button>
        </form>
      </div>

  </div>
@endsection
