
<html>
	<body>
		<fieldset>
        <form action="{{route('user.review.submit')}}" method = "post" enctype="multipart/form-data">
        {{csrf_field()}}
				<table style="border-color:blue; width:20%; height:50%;" align="center" border="2"><br>
					<tr>
						<td  align="center"><h1 style="color:green"><b>Write Us </b></h1></td>
					</tr>
					<tr>
						<td align="center"><input id="Name" name="Name" placeholder="Your name ...." value="" type="text"> <br><span id="err_Name"></span> </td>
</tr>
<tr>
	<td align="center"><input  id="Email" name="Email" type="text" placeholder="Your email ..." value="" type="text"> <br><span id="err_Email"></span></td>
						,</tr>
						<tr><td align="center"><input id="Subject" name="Subject" type="text" placeholder="Subject" value="" type="text"> <br><span id="err_Subject"></span></td>
					</tr>
					<tr>
						<td  align="center"><textarea id="Message" name="Message" placeholder="Message"></textarea>
						<br><span id="err_Message"></span></td>
					</tr>
					
					<tr>
						<td  align="center"><b>Give a Rating: </b></td>
</tr>
<tr><td align="center"><input id="Rating" name="Rating" type="text" placeholder="......out of 5......" value="" type="text"> <br><span id="err_Rating"></span>
					</tr>
					
					<tr>
						<td  align="center"> <input class="btn btn-success" name="Add_Review" type="Submit" value="Submit">
				    </td>
					</tr>
				</table>
			</form>

		</fieldset>
	</body>
</html>