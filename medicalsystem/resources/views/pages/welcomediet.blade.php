<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>DIETICIAN</title>
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
<li><a href="/doctor/diet">ADD DIET</a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MORE<span class="caret"></span></a>
          <ul class="dropdown-menu" style="font-style:italic">
            <li><a href="/doctor/getdiethelp">HELP</a></li>
            <li><a href="/doctor/changediet?dietician_id={{$dietician->dietician_id}}">CHANGE_PASSWORD</a></li>
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
  <h3 class="text-danger">Welcome Dietician <b th:text="${dietician.firstName}"></b><b th:text="${dietician.lastName}"></b></h3>

<p class="text-danger lead" >Here you can add dietary prescription to the System for view by patients<br> <i>A healthy nation is a disease free nation</i></p>
</div>
</div>
</div>
  <script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
