<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="/logout" style="margin-left: 1200px;">logout</a>
<center>
		<h2  style="margin-top:50px; font-style: italic;color: purple;"> Details</h2>
<table class="table table-striped w-auto" style="margin-top: 10px;height: 80px;">

  <!--Table head-->
  <thead>
    <tr>
      
     
      <th style="color:purple;">Item Name</th>
      <th style="color:purple;">Item Code</th>
      <th style="color:purple;">Unit</th>
      <th style="color:purple;">Tax</th>
      <th style="color:purple;">Hsn code</th>
      <th style="color:purple;">Date</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>
  	@foreach($result as $value)   
    <tr class="table" style="background-color:#BA87AE">
     
     
	<td style="font-weight: 600;">{{$value->iname}}</td>
	<td style="font-weight: 600;">{{$value->icode}}</td>
	<td style="font-weight: 600;">{{$value->sunit}}</td>
	<td style="font-weight: 600;">{{$value->stax}}</td>	
	<td style="font-weight: 600;">{{$value->shsncode}}</td>	
 
   <td style="font-weight: 600;">{{$value->sdate}}</td>	
 
 
     		
     
    </tr>
    @endforeach
  </tbody>
  <!--Table body-->


</table>
</center>
</body>
</html>