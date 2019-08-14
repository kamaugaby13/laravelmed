<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C.H.O</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/main.css')}}"/>
</head>
<body background="/custom/images/checklist-3222079_960_720.jpg">
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADD STAFF<span class="caret"></span></a>
          <ul class="dropdown-menu" style="font-style:italic">
            <li><a href="/doctor/dietregister?chief_id={{$chief->chief_id}}">ADD DIETICIAN</a></li>
<li><a href="/doctor/register?chief_id={{$chief->chief_id}}">ADD DOCTOR</a></li>
          </ul>
        </li>


<li><a href="/doctor/viewdoctors">VIEW DOCTOR</a></li>
<li><a href="/doctor/viewpatients">VIEW PATIENTS</a></li>
<li><a href="/doctor/viewarchives">VIEW ARCHIVES</a></li>
<li><a href="/doctor/viewabuse">VIEW ABUSE</a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MORE<span class="caret"></span></a>
          <ul class="dropdown-menu" style="font-style:italic">
            <li><a href="/doctor/getchiefhelp">HELP</a></li>
            <li><a href="/doctor/changechief?chief_id={{$chief->chief_id}}">CHANGE_PASSWORD</a></li>
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
<div class="col-md-offset-




3 col-md-3">
  <div class="home-class align-middle text-center">
  <h1 class="text-danger">Welcome Chief Doctor</h1>
<p class="text-danger lead" >Quality services for all patients is your obligation<br> Medicine is a calling</p>
</div>
</div>
</div>
  <script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
