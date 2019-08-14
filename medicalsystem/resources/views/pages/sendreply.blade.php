<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Reply</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/main.css')}}"/>
</head>
<body background="/custom/images/the-syringe-1291129_960_720.jpg">
<div class="container">

<br>
<form action="/doctor/sendreply"  method="post" >
    @csrf
<p></p>
<p></p>
<input type="hidden" name="doctorphonenumber" value="{{$doctorphonenumber}}">
<input type="hidden" name="patientphonenumber" value="{{$patientphonenumber}}">
<input type="hidden" name="doctorfirstname" value="{{$doctorfirstname}}">
<input type="hidden" name="patientfirstname" value="{{$patientfirstname}}">
<input type="hidden" name="doctor_id" value="{{$doctor_id}}">
<input type="hidden" name="type" value="{{$specialty}}">
<input type="hidden" name="description" value="{{$description}}">
<div></div>
<div class="form-group">
<label for="myDepartment" class="text-danger lead">Solution</label>
<textarea class="form-control style-textarea" cols="10" rows="14" id="myDepartment" placeholder="Description" name="solution"></textarea>
</div>

<div>
<button type="submit" class="btn btn-success">OK</button>
</div>
</form>
</div>

<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
