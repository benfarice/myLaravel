<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	{{Form::open(array('url'=>'thanks'))}}
	<br>
	{{Form::label('email','E-Mail Address')}}
	<br>
	{{Form::text('email')}}
	<br>
	{{Form::label('jobs','Jobs')}}
	<br>
	{{Form::select('jobs',
	array(
		'programmer'=>'Programmer',
		'network'   =>'Network',
		'database'  =>'Database',
	)
	)}}
	<br>
	{{Form::label('comments','Comments')}}
	<br>
	{{Form::textarea('comments','',array('placeholder'=>'your comments please'))}}
	<br>
	{{Form::submit('Click me')}}
	<br>
	{{Form::close()}}
</body>
</html>