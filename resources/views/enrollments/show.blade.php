@extends('enrollments.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">View Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enroll No : {{ $enrollments->enroll_no }}</h5>
        <p class="card-text">Batche : {{ $enrollments->batche }}</p>
        <p class="card-text">Student : {{ $enrollments->student }}</p>
        <p class="card-text">Join Date : {{ $enrollments->join_date }}</p>
        <p class="card-text">Fee : {{ $enrollments->fee }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection