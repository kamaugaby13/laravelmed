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
<table class="table table-dark table-hover bg-info">
<tr class="lead text-danger" style="font-style:italic">
<th>ID</th>
<th>FIRSTNAME</th>
<th>ABUSER_NUMBER</th>
<th>VIEW</th>
<th>DELETE</th>
</tr>
@forelse ($abuses as $abuse)
<tr class="lead">
    <td>{{$abuse->doctor_id}}</td>
    <td>{{$abuse->doctor_name}}</td>
    <td>{{$abuse->patient_number}}</td>
    <td><a href="/doctor/abusedesc?description={{$abuse->abuse_description}}">VIEW</a></td>
    <td><a href="/doctor/deleteabuse?id={{$abuse->id}}">DELETE</a></td>
    </tr>
@empty
<tr class="lead">
    <td>No abuses reported yet!</td>
</tr>
@endforelse

</table>
</div>
</div>
</div>
<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
