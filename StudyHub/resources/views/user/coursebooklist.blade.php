
<br><br>
<table align="center" border="3">
    <tr align="center">
        <td>courseName</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone No</td>
        
    </tr>

    
    @foreach($course as $r)
        <tr align="center">
            <td>{{$r->courseName}}</td>
            <td>{{$r->Name}}</td>
            <td>{{$r->Email}}</td>
            <td>{{$r->Phone}}</td>
            
        </tr>    
    @endforeach
</table>    