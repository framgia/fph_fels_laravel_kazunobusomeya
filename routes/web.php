<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('hello', function () {
    return view('welcome');
});*/

$html = <<< EOF
<html>
<head>
<title>Login</title>
<style>
body{width:400px; margin-left:auto; margin-right:auto; background-color:skyblue;}
h1{font-weight:bold; font-size:20px; text-align:center;}
.login{background-color:white; height:500px; width:100%;}

</style>
</head>
<body>
	<h1>Framgia E-learning System</h1>
	<div class="login">
	<span>Username</span>
	<input type="text" name="name"><br>
	<span>Password</span>
	<input type="password" name="password">
	</div>
</body>
</html>
EOF;

Route::get('/',function() use ($html){
	return $html;

});


?>