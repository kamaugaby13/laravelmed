<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>DOCTOR</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/main.css')}}"/>
</head>
<body background="/custom/images/gettyimages-78521514-1024x1024.jpg">
 <nav class="navbar navbar-dark bg-danger">
<div class="container">
<a class="navbar-brand" href="/hospital/home">Home</a>
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li><a href="/doctor/getconsultations?doctor_id={{$doctor->doctor_id}}&doctorphonenumber=
{{$doctor->phonenumber}}&doctorfirstname={{$doctor->firstname}}&specialty={{$doctor->specialty}}">VIEW CONSULTATIONS</a></li>
<li><a href="/doctor/abuse?doctor_id={{$doctor->doctor_id}}&doctorfirstname={{$doctor->firstname}}">REPORT_ABUSE</a></li>
 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MORE<span class="caret"></span></a>
          <ul class="dropdown-menu" style="font-style:italic">
            <li><a href="/doctor/getdoctorhelp">HELP</a></li>
            <li><a href="/doctor/changedoctor?doctor_id={{$doctor->doctor_id}}">CHANGE_PASSWORD</a></li>
          </ul>
 </li>


</ul>
</div>
</div>
@isset($message)
<div class="alert text-center text-success">
<h4 style="font-style:italic">{{$message}}</h4>
    </div>
@endisset

  </nav>
 <div class="row">
<div class="col-md-offset-3 col-md-3">
  <div class="home-class align-middle text-center">
  <h1 class="text-danger">Welcome Doctor <b>{{$doctor->firstname}}</b> <b>{{$doctor->lastname}}</b></h1>
  <p class="text-danger lead" >Here you can view and reply to a patient's <i>{{$doctor->specialty}}</i>consultation<br>
   Quality services for all patients is your obligation<br> Medicine is a calling</p>
</div>
</div>
</div>
<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
