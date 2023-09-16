@extends('batches.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">View Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Batch_Name : {{ $batches-> batch_name }}</h5>
        <p class="card-text">Course_Name : {{ $batches->course_name }}</p>
        <p class="card-text">Start_Date : {{ $batches->start_date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection