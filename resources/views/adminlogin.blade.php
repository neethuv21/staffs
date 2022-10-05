<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
<form action="/adminloginaction" method="post" >
	@csrf
	
<table>

<tr>
	<td>email</td>
	<td><input type="text" name="email"></td>
</tr>
<tr>
	<td>password</td>
	<td><input type="text" name="password"></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="register" value="login"></td>
</tr>

@if(session('error'))
<p style="color: red;">{{session('error')}}</p>
@endif
</table>	
</form>	
</center>
</body>
</html>