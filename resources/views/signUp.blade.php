<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="../css/signUp.css">
</head>
<body>
<h1>SignUp Page</h1>
<div class="signUp">
<form action="/signUp" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
	<div class="form-group">
	<span>Name:</span>
	<input type="text" name="name" value="{{old('name')}}"><br>
	@if($errors->has('name'))
	<em>{{$errors->first('name')}}</em>
	@endif
	</div>
	<div class="form-group">
	<span>Avatar:</span>
	<input type="file" name="avatar"><br>
	@if($errors->has('avatar'))
	<em>{{$errors->first('avatar')}}</em>
	@endif
	</div>
	<div class="form-group">
	<span>Email:</span>
	<input type="email" name="email" value="{{old('email')}}"><br>
	@if($errors->has('email'))
	<em>{{$errors->first('email')}}</em>
	@endif
	</div>
	<div class="form-group">
	<span>Password:</span>
	<input type="password" name="password" value="{{old('password')}}"><br>
	@if($errors->has('password'))
	<em>{{$errors->first('password')}}</em>
	@endif
	</div>
	<div class="form-button">
	<input type="reset" value="reset">
	<input type="submit" value="Sign Up">
	</div>
	@if(session('success'))
		<em>{{session('success')}}</em>
	@endif
	</form>
</div>
</body>
</html>