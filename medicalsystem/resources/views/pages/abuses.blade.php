<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Abuse</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/main.css')}}"/>
</head>
<body background="/custom/images/the-syringe-1291129_960_720.jpg">
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-9">
<br>
<form action="/doctor/abuse"  method="post" class="bg-info">
    @csrf
<p></p>

<p></p>
<input type="hidden" name="dfirstname" value="{{$doctorfirstname}}">
<input type="hidden" name="doctor_id" value="{{$doctor_id}}">


<div class="form-group">
<label for="myPhone" class="danger"><b><i>Phone</i></b></label>
<input class="form-control" id="myPhone" placeholder="PhoneNumber" type="text" name="phonenumber" pattern="^07\d{8}$"
title="Phone must be filled or be a ten digit number" required>

</div>
<div></div>
<div class="form-group">
<label for="myDepartment" class="text-danger lead">Description</label>
<textarea class="form-control style-textarea" cols="10" rows="10" id="myDepartment" placeholder="Description" name="description" required></textarea>
</div>

<div>
<button type="submit" class="btn btn-success">OK</button>
</div>
@isset($message)
<div class="lead text-success">
    <h3>{{$message}}</h3>
    </div>
@endisset
</form>
</div>
</div>
</div>
<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
