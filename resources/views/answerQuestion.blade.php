<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Answer Page</title>
</head>
<body>
@if(!empty('category2'))
	@foreach($questions_2 as $question_2)
	{{$question_2->question_word}}
	@endforeach

	{{$questions_2->links()}}
@endif
</body>
</html>