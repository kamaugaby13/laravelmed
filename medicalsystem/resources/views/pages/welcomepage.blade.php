<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Patient</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" />
</head>
<body background="/custom/images/gettyimages-175500251-2048x2048.jpg">
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-3">
<h1 style="color: blue">Welcome {{$patient->firstname,$patient->lastname}}</h1>


</div>
</div>
</div>
</div>
<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
