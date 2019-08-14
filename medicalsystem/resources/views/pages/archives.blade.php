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
<div class="col-md-offset-2 col-md-6">
<br>
<table class="table table-dark table-hover bg-info">
<tr class="lead text-danger" style="font-style:italic">
<th>DOCTOR_ID</th>
<th>NAME</th>
<th>PHONENUMBER</th>
<th>PATIENT_NAME</th>
<th>PHONENUMBER</th>
<th>CASE</th>
<th>VIEW</th>
</tr>
@forelse ($archives as $archive)
<tr class="lead">
    <td>{{$archive->doctor_id}}</td>
    <td>{{$archive->doctor_name}}</td>
    <td>{{$archive->doctor_phone}}</td>
    <td>{{$archive->patient_name}}</td>
    <td>{{$archive->patient_phone}}</td>
    <td>{{$archive->type}}</td>
    <td><a href="/doctor/archivedescription?description={{$archive->description}}">VIEW</a></td>
    </tr>
@empty
<tr class="lead">
    <td>No histories yet!</td>
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
