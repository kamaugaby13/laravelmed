@extends('layouts.app')
@section('content')

@if (count($patients)>0)
    @foreach ($patients as $patient)
        <div class="well">
        <h4>{{$patient->firstname}}</h4>
        <h4>{{$patient->lastname}}</h4>
        <h4><a href="/patient/{{$patient->id}}">View</a></h4>
        </div>
    @endforeach
@else
   <h1>No patients found</h1>
@endif

@endsection
