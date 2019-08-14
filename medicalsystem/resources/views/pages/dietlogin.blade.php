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
<body background="/custom/images/gettyimages-175500251-2048x2048.jpg">
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-3">
<br>

<form action="/doctor/logindiet"  method="post" class="border1-class">
    @csrf
<div class="form-group">
<label for="myId" class="danger"><b><i>Dietician ID</i></b></label>
<input class="form-control" id="myId" placeholder="ID" type="text" name="dietician_id" required>
</div>

<div class="form-group">
<label for="myPassword" class="danger"><b><i>Password</i></b></label>
<input class="form-control" id="myPassword" placeholder="Password" type="password" name="password" required>
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">OK</button>

</div>
@isset($message)

<div class="lead text-danger">
<h4 style="font-style: italic">{{$message}}</h4>
</div>
@endisset
</form>

</div>
</div>
</div>
<script type="text/javascript" src="/custom/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/custom/js/bootstrap.min.js"></script>
</body>
</html>
