<br><br>
    
<center>   
    <h3>Edit Question</h3> 
    <form action="{{route('user.ques.edit.submit')}}" method="post">
    <div class="col-md-4">
                {{csrf_field()}}
                <input type="hidden" name="id" class="form-control" value="{{$ques->id}}"><br>
             
             <input type="text" id="userName" name="userName"  value="{{$ques->userName}}"><br>
             <input type="text" id="question" name="question" value="{{$ques->question}}"><br>

             <input type="reset" class="btn btn-primary" value="Reset">&nbsp;&nbsp;
                <input type="submit" value="Update">
        </div>    
    </form>
</center>    