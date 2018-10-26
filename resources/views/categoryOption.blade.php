<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Category Option Page</title>
</head>
<style>
body{margin-right:auto; margin-left:auto; width:700px; border:1px solid black;}
.first_floor{border-bottom:1px solid black;}
.second_floor{border-bottom:1px solid black;}
ul{float:right;}
li{list-style:none; float:left; margin-left:20px;}
.category{border:1px solid black; display:inline-block; margin-top:40px; margin-left:30px;}
h2{display:inline-block;}

</style>
<body>
<div class="first_floor">
<p>Category</p>
</div>
<div class="second_floor">
<h2>E-learning System</h2>
<ul>
	<li><a href="dashboard">Dashboard</a></li>
	<li><a href="learnedWords">Learned Words</a></li>
	<li><a href="userEditProfile">Edit Profile</a></li>
</ul>
</div>
<form action="answerQuestion" method="POST">
{{csrf_field()}}
@foreach($items as $item)
<div class="category">
<h2>{{$item->title}}</h2>
<p>{{$item->description}}</p>
<input type="submit" value="{{$item->title}}" name="category{{$item->id}}">		
</div>
@endforeach
</form>
</body>
</html>