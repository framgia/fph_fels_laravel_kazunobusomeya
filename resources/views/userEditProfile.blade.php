<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Edit Profile Page</title>
</head>
<body>
<h1>User Edit Profile Page</h1>
<form action="userEditProfile" method="POST">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$item->id}}">
<span>Name:</span>
<input type="text" name="name" value="{{$item->name}}"><br>
<span>Avatar:</span>
<input type="file" name="avatar"><br>
<span>Email:</span>
<input type="email" name="email" value="{{$item->email}}"><br>
<span>Password</span>
<input type="password" name="password" value="{{$item->password}}">
<input type="submit" name="update" value="update"> 
</form>
</body>
</html>
