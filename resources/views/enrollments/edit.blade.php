@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit </div>
  <div class="card-body">
      
      <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />

        <label>Enrollment No</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{$enrollments->enroll_no}}" required></br>

        <label>Batch Id</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control" value="{{$enrollments->batch_id}}" required></br>

        <label>Student Id</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control" value="{{$enrollments->student_id}}" required></br>

        <label>Join Date</label></br>
        <input type="date" name="join_date" id="join_date" class="form-control" value="{{$enrollments->join_date}}" required></br>
        
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control" value="{{$enrollments->fee}}" required></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop