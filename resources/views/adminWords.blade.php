<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" name="csrf-token" content="{{csrf_token()}}">
    <title>Admin Add Words Page</title>
</head>
<style>
.add_word{float:left;}
.add_choice{float:right;}
</style>
<body>
<div class="first_floor">
<p>Categories</p>
</div>
<div class="second_floor">
<h2>E-learning System | Admin</h2>
</div>
<div class="add">
<form action="adminWords" method="POST"> 
    {{csrf_field()}}
    <div class="add_word">
    <p>Question Word</p>
    <input type="text" name="question_word">
    </div>
    <div class="add_choices">
    <input type="text" name="option1"><br>
    <input type="text" name="option2"><br>
    <input type="text" name="option3"><br>
    <input type="text" name="option4"><br>
    <input type="submit" name="basic500" value="basic500">
    <input type="submit" name="restaurant" value="restaurant">
    <input type="submit" name="trip" value="trip">
    </div>
</form>
</div>
</body>
</html>
