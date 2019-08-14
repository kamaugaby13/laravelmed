<!DOCTYPE html>

<html xmlns:th="http://www.thymeleaf.org">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>HOSPITAL</title>
<link rel="stylesheet" th:href="@{/css/bootstrap.min.css}"/>
<link rel="stylesheet" th:href="@{/css/main.css}"/>
</head>
<body background="/images/gettyimages-150972951-1024x1024.jpg">
 <nav class="navbar navbar-dark bg-danger">
<div class="container">
<a class="navbar-brand" href="#">Hospital Home</a>
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
<li><a th:href="@{/patient/login}">PATIENT</a></li>
<li><a th:href="@{/doctor/getdoctor}">DOCTOR</a></li>
<li><a th:href="@{/hospital/chiefhealthlogin}">C.H.O</a></li>
<li><a th:href="@{/hospital/viewschedule}">SCHEDULE</a></li>
</ul>
</div>
</div>
</nav>
<div class="row">
<div class="col-md-offset-3 col-md-3">
  <div class="home-class align-middle">
  <h1 class="text-danger">Welcome To The Hospital</h1>
<p class="text-danger lead" >Here we ensure that your health is our number priority<br>
   We have qualified medical personnel to ensure that you<br> get the quality health care you deserve</p>
</div>
</div>
</div>
  <script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
</body>
</html>
