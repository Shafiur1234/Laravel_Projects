
<html>
    <body>
        <fieldset>
            <form action="{{route('user.course.book.submit')}}" method = "post" enctype="multipart/form-data">
                {{csrf_field()}}
                <table style="border-color:green; width:40%; height:50%;" align="center" border="4">
                    <tr>
                        <td align="center" colspan="2"><h1 >Buy Course</h1></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><img width="300px" heigth="200px" src="https://cdn.dribbble.com/users/113499/screenshots/6742459/bevis.png?compress=1&resize=400x300&vertical=top"/></td>
                    </tr>
                    
                    <tr>
                       <td align="left"><b>Course name:</b></td>
                       <td><input type="text" id="courseName" name="courseName"  value="" >
                       <br><span id="err_courseName" class="text-danger"></span>
                       </td>
                    </tr>
                    
                    

                    <tr>
                       <td align="left"><b>Name:</b></td>
                        <td><input type="text" id="Name" name="Name" value="" >
                      <br><span id="err_Name">&nbsp; <br></span>
                        </td>        
                    </tr>

                    <tr>
                       <td align="left"><b>Email: </b></td>
                        <td><input id="Email" name="Email" value="" type="email">
                      <br><span id="err_Email">&nbsp; <br></span>
                        </td>        
                    </tr>

                    <tr>
                       <td align="left"><b>Phone no: </b></td>
                        <td><input id="Phone" name="Phone" value="" type="text">
                      <br><span id="err_Phone">&nbsp; <br></span>
                        </td>        
                    </tr>

                   
                    <tr align="center">
                       <td colspan="2"> <input class="btn btn-success" type="submit" value="Buy"></td>
                    </tr>
                </table>
            </form>

        </fieldset>
    </body>
</html>

