@extends('layoute.layoute')

@section('content')

  <div class="container">

    <div class="button">
        <a href="{{ route('employee.index') }}">BACK</a>
    </div>

      <div class="edit">
        <form method="post" action="{{ route('employee.update', $employee -> id) }}">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="firtname">FirstName</label>
            <input type="text" name="firtname" value="{{$employee -> firtname}}">
          </div>
          <div class="form-group">
            <label for="lastname">LastName</label>
            <input type="text" name="lastname" value="{{$employee -> lastname}}">
          </div>
          <div class="form-group">
            <label for="birthDay">BirthDay</label>
            <input type="text" name="birthDay" value="{{$employee -> birthDay}}">
          </div>
          <div class="form-group">
            <label for="jobtitle">JobTitle</label>
            <input type="text" name="jobtitle" value="{{$employee -> jobTitle}}">
          </div>
          <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" value="{{$employee -> salary}}">
          </div>
          <button type="submit">Save</button>
        </form>
      </div>

  </div>
@endsection
