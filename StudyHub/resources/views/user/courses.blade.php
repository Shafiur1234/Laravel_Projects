<head>
</head>
<body>
	<fieldset>
	<form action="{{route('user.course.book.submit')}}" method = "post">
    {{csrf_field()}}
    
		<table align="center">
			<tr>
				<td colspan="2" align="center" style="color:blue;"><h1><b>Courses</b></h1></td>
			</tr>
			<tr>
						<td colspan="2"><hr></td>
			</tr>
			<tr>
				<td align="left"><h2><b>API</b></h2></td>
			</tr>
			<tr>
				<td><img width="400px" heigth="300px" src="{{ URL('images/api.png') }}"/></td>
				
			</tr>
			<tr>
				<td align="left"><b>BDT- 5,000</b>/3 months</td>
			</tr>
			<tr>
						<td><br></td>
			</tr>
			<tr>
				<td><a href ="{{route('user.course.book.submit')}}"><input type="button" value="Buy"> </a></td>
			</tr>
			<tr>
						<td colspan="2"><hr></td>
			</tr>
			<tr>
						<td><br><br><br><br></td>
			</tr>
			<tr>
				<td align="left"><h2><b>Laravel</b></h2></td>
			</tr>
			<tr>
				<td><img width="400px" heigth="300px" src="{{ URL('images/laravel.png') }}"/></td>
				
			</tr>
			<tr>
				<td align="left"><b>BDT- 10,000</b>/4 months</td>
			</tr>
			<tr>
						<td><br></td>
			</tr>
			<tr>
				<td><a href ="{{route('user.course.book.submit')}}"><input type="button" value="Buy"> </a></td>
			</tr>
			<tr>
						<td colspan="2"><hr></td>
			</tr>
			<tr>
						<td><br><br><br><br></td>
			</tr>
			<tr>
				<td align="left"><h2><b>React</b></h2></td>
			</tr>
			<tr>
				<td><img width="400px" heigth="300px" src="{{ URL('images/react.png') }}"/></td>
				
			</tr>
			<tr>
				<td align="left"><b>BDT- 15,000</b>/5 months</td>
			</tr>
			<tr>
						<td><br></td>
			</tr>
			<tr>
				<td><a href ="{{route('user.course.book.submit')}}"><input type="button" value="Buy"> </a></td>
			</tr>