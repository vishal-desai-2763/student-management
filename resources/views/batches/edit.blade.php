@extends('batches.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('batche/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
        <label> Batch Name</label></br>
        <input type="text" name=" batch_name" id=" batch_name" value="{{$batches-> batch_name}}" class="form-control"></br>
        <label>Course Name</label></br>
        <input type="text" name="course_name" id="course_name" value="{{$batches->course_name}}" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" value="{{$batches->start_date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop