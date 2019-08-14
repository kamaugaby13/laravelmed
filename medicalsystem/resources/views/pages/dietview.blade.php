<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>DIET</title>
<link rel="stylesheet" href="{{asset('custom/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('custom/css/nextstyle.css')}}"/>
</head>
<body background="/custom/images/composition-variety-raw-organic-vegetables-fruits-balanced-diet-composition-variety-raw-organic-vegetables-109477770.jpg">
<br>
<div class="container">
<h1 class="text-danger bg-info">{{$diet->condition}}</h1>
<div class="lead carbohydrates div" >
<h3>PROTEINS</h3>
<h5 class="text-success">{{$diet->proteins}}</h5>
</div>
<br>
<div class="lead carbohydrates div" >
<h3>CARBOHYDRATES</h3>
<h5 class="text-success">{{$diet->carbohydrates}}</h5>
</div>
<br>
<div class="lead carbohydrates div" >
<h3>VITAMINS</h3>
<h5 class="text-success">{{$diet->vitamins}}</h5>
</div>
<br>
<div class="lead carbohydrates div" >
<h3>FOOD TO AVOID</h3>
<h5 class="text-danger">{{$diet->avoids}}</h5>
</div>
</div>
</body>
</html>
