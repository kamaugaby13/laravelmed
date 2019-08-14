<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>VIEW</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/main.css')}}"/>
</head>
<body background="/custom/images/stethoscope-2617701_1920.jpg>
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-9">
<br>
<table class="table table-dark">
<tr class="lead text-danger" style="font-style:italic">
<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>AGE</th>
<th>TYPE</th>
<th>PHONENUMBER</th>
<th>VIEW</th>
</tr>

    @forelse ($consultation as $complain)
      <tr class="lead text-info">
       <td>{{$complain->firstname}}</td>
        <td>{{$complain->lastname}}</td>
         <td>{{$complain->age}}</td>
        <td>{{$complain->type}}</td>
        <td>{{$complain->phonenumber}}</td>
      <td><a href="/doctor/viewdescription?specialty={{$complain->type}}&patientfirstname={{$complain->firstname}}&patientphonenumber={{$complain->phonenumber}}
        &doctorfirstname={{$doctorfirstname}}&doctorphonenumber={{$doctorphonenumber}}&doctor_id={{$doctor_id}}&consultation={{$complain->description}}">VIEW</a></td>
            </tr>
    @empty
    <p class="lead"><i>No consultations yet!</i></p>
    @endforelse

</table>
</div>
</div>
</div>
<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
