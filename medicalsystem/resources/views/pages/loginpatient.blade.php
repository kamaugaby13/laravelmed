<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Patient</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/main.css')}}"/>
</head>
<body background="/custom/images/gettyimages-150972951-1024x1024.jpg">
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-3">
<br>
<form action="/patient/login"  method="post" class="border1-class">
@csrf
<div class="form-group">
<label for="myPhone" class="danger"><b><i>Phone</i></b></label>
<input class="form-control" id="myPhone" placeholder="PhoneNumber" type="text" name="phonenumber" required>
</div>

<div class="form-group">
<label for="myPassword" class="danger"><b><i>Password</i></b></label>
<input class="form-control" id="myPassword" placeholder="Password" type="password" name="password" required>
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">OK</button>
</div>
<div class="form-group text-center"><a style="color:blue" href="/patient/register"><b><i>SIGN UP</i></b></a></div>
<div>
        @isset($message)
        <h4 class="text-danger">{{$message}}</h4>
        @endisset
</div>
</form>

</div>
</div>
</div>
<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
