<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Login Page</title>
</head>
<style>
body{width:600px; margin-left:auto; margin-right:auto; height:500px; background-color:skyblue;}
h1{text-align:center; font-size:20px;}
.login{border:1px solid black; height:300px; background-color:white;}
span{font-weight:bold;}

</style>
<body>
<h1>Framgia E-learning System</h1>
<div class="login">
<form method="POST" action="/login/post">
{{csrf_field()}}
<span>User name:</span>
<input type="text" name="name" value="{{old('name')}}"><br>
<span>Password:</span>
<input type="password" name="password" value="{{old('password')}}"><br>
<input type="submit" name="login" value="login">
@if(count($errors)>0)
<ul>
@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
@endforeach
</ul>
@endif
</form>
</div>
</body>
</html>