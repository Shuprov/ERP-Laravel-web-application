<html>
<head>
   <title  style="color: indigo">Time management</title>
   <link rel = "stylesheet" type="text/css" href="Css/registration4.css">
</head>
 
<body>
    <div class ="Registraiton">
     <h1> Time management </h1>
     <form action ="" method ="post">
      @csrf
       <p> Project Name: </p>
       <input type ="text" name ="projectname" placeholder="Project Name">
      <span style ="color:red">@error('projectname'){{$message}}@enderror</span>
 
       <p> Previously Estimated Time: </p>
       <input type ="time" name ="previoustime" placeholder="Previously estimatedtime">
      <span style ="color:red">@error('previoustime'){{$message}}@enderror</span>
      
      <p> New Added Time: </p>
       <input type ="time" name ="newaddedtime" placeholder="New added time">
      <span style ="color:red">@error('newaddedtime'){{$message}}@enderror</span>
    

       <button type = "submit"> Add </button>
     
     </form><h1>
     <a href="/Timeandexpence">Back</a></h1>
    
    </div>   

    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
</body>
</html>