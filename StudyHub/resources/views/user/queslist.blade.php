<br><br>
<table align="center" border="3" style="background-color:yellow">
    <tr align="center">
        <td style="color:red">Name</td>
        <td style="color:red">Question</td>
    </tr>

    
    @foreach($ques as $q)
        <tr align="center">
            <td>{{$q->userName}}</td>
            <td>{{$q->question}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('user.ques.edit',['id'=>$q->id])}}">Edit </a>
                <a class="btn btn-danger" href="{{route('user.ques.delete',['id'=>$q->id])}}">Delete</a>
            </td>
        </tr>    
    @endforeach
</table>    