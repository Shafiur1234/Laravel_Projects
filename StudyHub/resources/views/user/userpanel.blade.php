<html>   
    <style>
        .panel{
            color:red;
            background-color:lightgreen;
        }
        #row{
            background-color:skyblue;
            border-color: black;
        }
    </style>
</head>
<body>
<br>
    <div class="text-center">
        <h1 style="color:green" align="center">Welcome User!!</h1>
    </div>
    <br>

    <table style="border-color:green; width:40%; height:10%;" align="center" border="4">

    <tr class="panel">
        <td colspan="3" align="center" ><h1>User Panel</h1></td>
    </tr>

    <tr id="row">
        <td align="center"><h2> Ask Question</h2></td>
        <td align="center"><a href ="{{route('user.ques.submit')}}"><button style="color:green"><h3>Ask</h3></button></a></td>
    </tr>

    <tr id="row">
        <td align="center"><h2> Buy a Course</h2></td>
        <td align="center"><a href ="{{route('user.ques.submit')}}"><button style="color:green"><h3>Buy</h3></button></a></td>
    </tr>

    <tr id="row">
        <td align="center"><h2> Give Review & Rating</h2></td>
        <td align="center"><a href ="{{route('user.review.submit')}}"><button style="color:green"><h3>Add</h3></button></a></td>
    </tr>
    
    </table>
</body>    
</html>