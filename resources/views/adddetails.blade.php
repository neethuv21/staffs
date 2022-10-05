<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<a href="/readdetails" style="margin-left: 1000px;">view items</a>
	<a href="/logout" style="margin-left: 1200px;">logout</a>
<center>
<form action="/register" method="post">
	@csrf
<table>
<tr>
	<td>Item Name</td>
	<td><input type="text" name="name"></td>
</tr>	
<tr>
	<td>Item Code</td>
	<td><input type="text" name="code"></td>
</tr>
<tr>
	<td>Unit</td>
	<td><input type="text" name="unit"></td>
</tr>
<tr>
	<td>Tax</td>
	<td><input type="text" name="tax"></td>
</tr>
<tr>
	<td>Hsn code</td>
	<td><input type="text" name="hsncode"></td>
</tr>
<tr>
	<td>Date</td>
	<td><input type="date" name="date"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" name="register"></td>
</tr>
</table>	
</form>	
</center>
</body>
</html>