<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="csrf-token" content="{{csrf_token()}}">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<h1>Framgia E-learning System</h1>
<div class="login">

	<form method="POST" action="/login">
	{{csrf_field()}}
	<div class="login-form">
	<span>Email:</span>
	<input type="email" name="email" value="{{old('email')}}">
	</div>
	<div class="login-form">
	<span>Password:</span>
	<input type="password" name="password" value="{{old('password')}}">
	</div>
	<div class="login-button">
	<input type="submit" name="login" value="login">
	</div>
	<div class="login-success">
	@if(isset($error))
		<em>{{$error}}</em>
	@endif
	</div>
	</form>
<a href="{{action('LoginController@linkSignUp')}}">To Sign Up Page</a>
</div>
</body>
</html>