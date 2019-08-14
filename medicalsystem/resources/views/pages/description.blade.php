<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>VIEW</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
</head>
<body background="/custom/images/stethoscope-2617701_1920.jpg">
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-9">
<br>
<table class="table table-dark">
<tr class="lead text-danger" style="font-style:italic">

<th>DESCRIPTION</th>
<th>REPLY</th>
</tr>
<tr class="lead">
<td>{{$description}}</td>
<td><a href="/doctor/sendreply?doctorfirstname={{$doctorfirstname}}&
    doctor_id={{$doctor_id}}&patientphonenumber={{$patientphonenumber}}&
    doctorphonenumber={{$doctorphonenumber}}&patientfirstname={{$patientfirstname}}
    &specialty={{$specialty}}&description={{$description}}">REPLY</a></td>
</tr>
</table>
</div>
</div>
</div>
<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
