@extends('layoute.layoute')

@section('content')

  <div class="container">

    <div class="button">
        <a href="{{ route('employee.index') }}">BACK</a>
    </div>

      <div class="edit">
        <form method="post" action="{{ route('employee.store') }}">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="firtname">FirstName</label>
            <input type="text" name="firtname" value="">
          </div>
          <div class="form-group">
            <label for="lastname">LastName</label>
            <input type="text" name="lastname" value="">
          </div>
          <div class="form-group">
            <label for="birthDay">BirthDay</label>
            <input type="text" name="birthDay" value="">
          </div>
          <div class="form-group">
            <label for="jobtitle">JobTitle</label>
            <input type="text" name="jobtitle" value="">
          </div>
          <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" value="">
          </div>
          <button type="submit">Save</button>
        </form>
      </div>

  </div>
@endsection
