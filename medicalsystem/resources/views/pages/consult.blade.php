<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Consult</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/main.css')}}"/>
</head>
<body background="/custom/images/the-syringe-1291129_960_720.jpg">
<div class="container">

<br>
<form action="/hospital/consult"  method="post" >
    @csrf
<p></p>

<p></p>
<input type="hidden" name="consultationtype" value="{{$type}}">
<input type="hidden" name="firstname" value="{{$firstname}}">
<input type="hidden" name="lastname" value="{{$lastname}}">
<input type="hidden" name="phonenumber" value="{{$phonenumber}}">
<input type="hidden" name="age" value="{{$age}}">

<div></div>
<div class="form-group">
<label for="myDepartment" class="text-danger lead">Description</label>
<textarea class="form-control style-textarea" cols="10" rows="13" id="myDepartment" placeholder="Description" name="description" required></textarea>
</div>

<div>
<button type="submit" class="btn btn-success">OK</button>
</div>
</form>
<div class="text-danger">
@isset($message)
<h4 class="text-danger">{{$message}}</h4>
@endisset
</div>
</div>

<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
