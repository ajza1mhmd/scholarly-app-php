@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
      
      <form action="{{ url('batches') }}" method="post">
        {!! csrf_field() !!}
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>Course Id</label></br>
        <!-- <input type="text" name="course_id" id="course_id" class="form-control" required></br> -->
         <select name="course_id" id="course_id" class="form-control">
            @foreach($courses as $id => $name)
              <option value="{( $id )}">{{ $name }}<option>
            @endforeach
         </select>
        <label>Start Date</label></br>
        <input type="date" name="start_date" id="start_date" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop