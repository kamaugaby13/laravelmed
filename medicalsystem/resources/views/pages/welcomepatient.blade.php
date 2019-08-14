<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>PATIENT</title>
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

<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONSULTATION<span class="caret"></span></a>
          <ul class="dropdown-menu" style="font-style:italic">
            <li><a href="/hospital/consult?firstname={{$patient->firstname}}&lastname={{$patient->lastname}}&
            phonenumber={{$patient->phonenumber}}&age={{$patient->age}}&type={{$general}}">General</a></li>
            <li><a href="/hospital/consult?firstname={{$patient->firstname}}&lastname={{$patient->lastname}}&
                phonenumber={{$patient->phonenumber}}&age={{$patient->age}}&type={{$optical}}">Optical</a></li>
            <li><a href="/hospital/consult?firstname={{$patient->firstname}}&lastname={{$patient->lastname}}&
              phonenumber={{$patient->phonenumber}}&age={{$patient->age}}&type={{$dental}}">Dental</a></li>
            <li><a href="/hospital/consult?firstname={{$patient->firstname}}&lastname={{$patient->lastname}}&
              phonenumber={{$patient->phonenumber}}&age={{$patient->age}}&type={{$paediatric}}">Paediatric</a></li>
            <li><a href="/hospital/consult?firstname={{$patient->firstname}}&lastname={{$patient->lastname}}&
              phonenumber={{$patient->phonenumber}}&age={{$patient->age}}&type={{$ent}}">E.N.T</a></li>
          </ul>
        </li>
        <li><a href="/hospital/viewreply?phonenumber={{$patient->phonenumber}}">VIEW_REPLY</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MORE<span class="caret"></span></a>
            <ul class="dropdown-menu" style="font-style:italic">
              <li><a href="/hospital/viewhelp">HELP</a></li>
              <li><a href="/hospital/password?phonenumber={{$patient->phonenumber}}">CHANGE_PASSWORD</a></li>
            </ul>
          </li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DIETICS<span class="caret"></span></a>
          <ul class="dropdown-menu" style="font-style:italic">
            <li><a href="/hospital/dietdisplay?condition={{$cancer}}">Cancer</a></li>
            <li><a href="/hospital/dietdisplay?condition={{$aids}}">AIDS</a></li>
            <li><a href="/hospital/dietdisplay?condition={{$diabetes}}">Diabetes</a></li>
            <li><a href="/hospital/dietdisplay?condition={{$ulcers}}">Ulcers</a></li>
            <li><a href="/hospital/dietdisplay?condition={{$hypertension}}">Hypertension</a></li>
            <li><a href="/hospital/dietdisplay?condition={{$obesity}}">Obesity</a></li>
            <li><a href="/hospital/dietdisplay?condition={{$athritis}}">Athritis</a></li>
            <li><a href="/hospital/dietdisplay?condition={{$expectancy}}">Expectancy</a></li>
          </ul>
        </li>

</ul>
<form class="navbar-form" role="search" action="/hospital/dietdisplay">
<div class="form-group">
<input type="text" class="form-control" placeholder="Diabetes" name="condition">
</div>
<button type="submit" class="btn btn-default">Submit</button>

</form>
@isset($message)

<div class="lead text-success">
<h4 style="font-style: italic">{{$message}}</h4>
</div>
@endisset
</div>
</div>

  </nav>

  <div class="row">
<div class="col-md-offset-3 col-md-3">
  <div class="home-class align-middle text-center">
  <h1 class="text-danger"><b th:text="${patient.firstName}"></b><b th:text="${patient.lastName}"></b> Welcome To The Hospital</h1>
<p class="text-danger lead" >Here you can consult a doctor or view dietary advice<br>
   We have qualified medical personnel to ensure that you<br> get the quality health care you deserve</p>
</div>
</div>
</div>
<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
