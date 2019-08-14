<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>VIEW</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}" />
</head>
<body background="/custom/images/stethoscope-2617700_1920.jpg">
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-9">
<br>
<table class="table table-dark">
<tr class="lead text-danger" style="font-style:italic">
<th>ID</th>
<th>FIRSTNAME</th>
<th>PHONENUMBER</th>
<th>PATIENT</th>
<th>NUMBER</th>
<th>TYPE</th>
<th>VIEW</th>
</tr>

    @forelse ($replys as $reply)
    <tr class="lead text-info">
<td>{{$reply->doctor_id}}</td>
<td>{{$reply->doctor_name}}</td>
<td>{{$reply->doctor_phone}}</td>
<td>{{$reply->patient_name}}</td>
<td>{{$reply->patient_phone}}</td>
<td>{{$reply->type}}</td>
<td><a href="/hospital/description?solution={{$reply->solution}}">VIEW</a></td>
</tr>
    @empty
    <tr>
      <td class="lead text-info">No replies yet!</td>
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
