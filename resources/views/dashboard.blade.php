<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard Page</title>
</head>
<style>
</style>
<body>
<div class="first_floor">
<p>Dashboard</p>
</div>
<div class="second_floor">
<h1>E-learning System</h1>
<ul>
    <a href="categoryOption">Category</a>
    <a href="learnedWords">Learned Words</a>
    <a href="profile">Profile</a>
</ul>
</div>
<div class="third_floor">
@if(isset($message))
<p>{{$sesdata}}</p>
@endif
</div>
</body>
</html>