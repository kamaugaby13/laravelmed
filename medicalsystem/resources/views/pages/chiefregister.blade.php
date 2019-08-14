@extends('pages.master')
@section('title')
    CHIEF
@endsection
@section('body')
<body background="/custom/images/gettyimages-175500251-2048x2048.jpg">
@endsection
@section('content')
<form action="/doctor/registerchief"  method="post" class="border1-class">
    @csrf
    <div class="form-group">
    <label for="myFname" class="danger"><b><i>FirstName</i></b></label>
    <input class="form-control" id="mphyFname" placeholder="FirstName" type="text" name="firstname"
    pattern="[a-zA-Z]+" title="Firstname must be filled or contain letters only no numbers or characters!" required>
    </div>
    <div class="form-group">
    <label for="myLname" class="danger"><b><i>LastName</i></b></label>
    <input class="form-control" id="myLname" placeholder="LastName" type="text" name="lastname"
    pattern="[a-zA-Z]+" title="Lastname must be filled or contain letters only no numbers or characters!" required>
    </div>

    <div class="form-group">
    <label for="myPhone" class="danger"><b><i>Phone</i></b></label>
    <input class="form-control" id="myPhone" placeholder="PhoneNumber" type="text" name="phonenumber"
    pattern="^07\d{8}$" title="Phone must be filled or be a ten digit number" required>>
    </div>

    <div class="form-group">
    <label for="myPass" class="danger"><b><i>Chief ID</i></b></label>
    <input class="form-control" id="myPass" placeholder="ID" type="text" name="chief_id"
    pattern="[a-zA-Z0-9]{3,}" title="Id must be filled and atleast 3 letters or numbers long" required>
    </div>
    <div class="form-group">
    <label for="myPassword"><b><i>Password</i></b></label>
    <input class="form-control" id="myPassword" placeholder="Password" type="password" name="password"
    pattern="[a-zA-Z0-9]{6,}" title="password should contain atleast 6 letters or numbers no characters" required>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-default">OK</button>
    </div>
@endsection
