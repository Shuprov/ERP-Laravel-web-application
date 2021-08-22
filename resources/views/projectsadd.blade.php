<html>
<head>
   <title  style="color: indigo">Projects Add</title>
   <link rel = "stylesheet" type="text/css" href="Css/registration4.css">
</head>
 
<body>
    <div class ="Registraiton">
     <h1> Projects Add </h1>
     <form action ="" method ="post">
      @csrf

      <p> Project Name: </p>
      <input type ="text" name ="projectname" placeholder="Project Name">
     <span style ="color:red">@error('projectname'){{$message}}@enderror</span>

       <p>Short description: </p>
       <input type ="text" name ="shortdescription" placeholder="Short description">
      <span style ="color:red">@error('shortdescription'){{$message}}@enderror</span>

      <p>Project Leader: </p>
      <input type ="text" name ="projectleader" placeholder="Project Leader">
     <span style ="color:red">@error('projectleader'){{$message}}@enderror</span>


       <p> Project budget: </p>
       <input type ="number" name ="projectbudget" placeholder="Project budget">
      <span style ="color:red">@error('projectbudget'){{$message}}@enderror</span>
      
      <p> Total amount spent: </p>
       <input type ="number" name ="totalamountspent" placeholder="Total amount spent">
      <span style ="color:red">@error('totalamountspent'){{$message}}@enderror</span>
      
      <p> Duration: </p>
       <input type ="datetime-local" name ="duration" placeholder="Duration">
      <span style ="color:red">@error('duration'){{$message}}@enderror</span>

       <button type = "submit"> Add </button>
     
     </form>
     
    
    </div>   
    <br><br>

   <h1><a href="/Projectadd">Back</a></h1> 

    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
</body>
</html>