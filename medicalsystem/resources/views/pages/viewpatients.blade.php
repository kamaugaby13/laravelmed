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
<form class="bg-info right" action="/doctor/findpatient" method="post">
    @csrf
<div class="form-group">
<input type="text" class="form-control" placeholder="Phone" name="phonenumber">
</div>
<button type="submit" class="btn btn-default">Submit</button>

</form>
<br>
<table class="table table-dark table-hover bg-info">
<tr class="lead text-danger" style="font-style:italic">
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>PHONENUMBER</th>
<th>AGE</th>
<th>REMOVE</th>
</tr>
@forelse ($patients as $patient)
<tr class="lead">
<td>{{$patient->firstname}}</td>
    <td>{{$patient->lastname}}</td>
    <td>{{$patient->phonenumber}}</td>
    <td>{{$patient->age}}</td>
    <td><a href="/doctor/removepatient?phonenumber={{$patient->phonenumber}}">REMOVE</a></td>
    </tr>
@empty
<tr class="lead text-danger">
    <td>No patients in the system!</td>
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
