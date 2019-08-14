
@extends('layouts.app')
@section('content')

<br>
<form action="/addpatient"  method="post">

<div class="form-group">
<label for="myPhone" class="danger"><b><i>Phone</i></b></label>
<input class="form-control" id="myPhone" placeholder="PhoneNumber" type="text" name="phoneNumber" required>
</div>

<div class="form-group">
<label for="myPassword"><b><i>Password</i></b></label>
<input class="form-control" id="myPassword" placeholder="Password" type="password" name="password" required>
</div>

<div class="form-group">
<button type="submit" class="btn btn-default">OK</button>
</div>
</form>
<p></p>
@if (count($diseases)>0)
<ul>
@foreach ($diseases as $disease)
<li>{{$disease}}</li>
@endforeach
</ul>
@endif
@endsection

