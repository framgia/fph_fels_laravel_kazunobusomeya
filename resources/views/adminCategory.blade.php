<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" name="csrf-token" content="{{csrf_token()}}">
    <title>Admin Category Page</title>
</head>
<style>
body{margin-left:auto; margin-right:auto; width:600px; height:600px; border:1px solid black;}
.first_floor{border-bottom:1px solid black;}
.second_floor{border-bottom:1px solid black;}
</style>
<body>
<div class="first_floor">
<p>Categories</p>
</div>
<div class="second_floor">
<h2>E-learning System(Admin)</h2>
</div>
<div class="third_floor">
<p>Add category</p>
<form action="adminCategory" method="POST">
	{{csrf_field()}}
	<p>Title</p>
	<input type="text" name="title" value="{{old('title')}}">
	@if($errors->has('title'))
	<em>{{$errors->first('title')}}</em>
	@endif
	<p>Description</p>
	<textarea name="description" rows="4" cols="25" value="{{old('description')}}"></textarea>
	@if($errors->has('description'))
	<em>{{$errors->first('description')}}</em>
	@endif
	<div class="add_category">
	<input type="submit" name="add" value="add">
	</div>
	<div class="success">
	@if(session('success'))
		<em>{{session('success')}}</em>
	@endif
	</div>
</form>	
</body>
</html>