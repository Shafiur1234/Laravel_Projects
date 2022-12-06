
<br><br>
<table style="border-color:blue" align="center" border="2">
    <tr align="center">
        <td>Name</td>
        <td>Email</td>
        <td>Subject</td>
        <td>Message</td>
        <td>Rating</td>
        
    </tr>

    
    @foreach($review as $r)
        <tr align="center">
            <td>{{$r->Name}}</td>
            <td>{{$r->Email}}</td>
            <td>{{$r->Subject}}</td>
            <td>{{$r->Message}}</td>
            <td>{{$r->Rating}}</td>
            
        </tr>    
    @endforeach
</table>    