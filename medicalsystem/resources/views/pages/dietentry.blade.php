<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>DIET</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/nextstyle.css')}}"/>
</head>
<body background="/custom/images/bananas-carrots-cherries-264537.jpg">
<div class="gapping lead text-danger">
<h3>Here you can add dietary Information as per the dietary condition
to add a new diet to the system as the fields guide</h3>
</div>
<div class="container">

<div class="row">
<div class="col-md-offset-3 col-md-9">
<form action="/hospital/diet"  method="post"  id="dietenter">
@csrf
<div class="form-group">
<label for="myCondition" class="danger"><b><i></i></b></label>
<input class="form-control" id="myCondition" placeholder="Condition" type="text" name="condition" required>
</div>

<div class="form-group">
<label for="myProtein" class="text-danger lead"></label>
<textarea class="form-control style-textarea" cols="20" rows="10" id="myProtein" placeholder="Proteins" name="proteins" required></textarea>
</div>
<div class="form-group">
<label for="myCarbohydrates" class="text-danger lead"></label>
<textarea class="form-control style-textarea" cols="20" rows="10" id="myCarbohydrates" placeholder="Carbohydrates" name="carbohydrates" required></textarea>
</div>
<div class="form-group">
<label for="myVitamin" class="text-danger lead"></label>
<textarea class="form-control style-textarea" cols="20" rows="10" id="myVitamin" placeholder="Vitamin" name="vitamins" required></textarea>
</div>
<div class="form-group">
<label for="myAvoids" class="text-danger lead"></label>
<textarea class="form-control style-textarea" cols="20" rows="10" id="myAvoids" placeholder="To Avoid" name="avoids" required></textarea>
</div>
<div>
<button type="submit" class="btn btn-success">OK</button>
</div>
</form>
@isset($message)
<div class="lead text-success" style="font-style: italic">
    <h4>{{$message}}</h4>
    <div>
@endisset

<h4><a href="/hospital/home">HOME</a></h4>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
