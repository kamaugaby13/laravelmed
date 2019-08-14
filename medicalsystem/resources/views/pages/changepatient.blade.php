<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>CHANGE</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/main.css')}}"/>
</head>
<body background="/custom/images/gettyimages-175500251-2048x2048.jpg">
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-3">
<br>
<form action="/hospital/password"  method="post" class="border1-class">
@csrf

<input type="hidden" name="phonenumber" value="{{$phonenumber}}">

<div class="form-group">
    <label for="myPwd" class="danger"><b><i>Old Password</i></b></label>
    <input class="form-control" id="myPwd" placeholder="Old Password" type="password" name="oldpassword"
    pattern="[a-zA-Z0-9]{6,}" title="password should contain atleast 6 letters or numbers no characters" required>
    </div>

<div class="form-group">
<label for="myPwd" class="danger"><b><i>New Password</i></b></label>
<input class="form-control" id="myPawd" placeholder="New Password" type="password" name="newpassword"
pattern="[a-zA-Z0-9]{6,}" title="password should contain atleast 6 letters or numbers no characters" required>

</div>
<div>
<label for="myPassword" class="danger"><b><i>Confirm Password</i></b></label>
<input class="form-control" id="myPassword" placeholder="Confirm Password" type="password" name="confirmpassword"
pattern="[a-zA-Z0-9]{6,}" title="password should contain atleast 6 letters or numbers no characters" required>
</div>
<div class="form-group">
<button type="submit" class="btn btn-default">OK</button>
</div>
@isset($message)
<div>
    <h4 class="lead text-danger">{{$message}}</h4>
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
