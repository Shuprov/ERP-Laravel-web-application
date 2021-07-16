<html>
<head>
   <title  style="color: indigo">Projects edit5</title>
   <link rel = "stylesheet" type="text/css" href="Css/registration5.css">
</head>
 
<body>
    <div class ="Registraiton">
     <h1> Projects edit5 </h1>
     <form action ="" method ="post">
      @csrf

      <p> Project Name: </p>
      <input type ="text" name ="projectname" value="{{$user5->projectname}}" placeholder="Project Name">
     <span style ="color:red">@error('projectname'){{$message}}@enderror</span>

       <p>Short description: </p>
       <input type ="text" name ="shortdescription" value="{{$user5->shortdescription}}" placeholder="Short description">
      <span style ="color:red">@error('shortdescription'){{$message}}@enderror</span>

      <p>Project Leader: </p>
      <input type ="text" name ="projectleader" value="{{$user5->projectleader}}" placeholder="Project Leader">
     <span style ="color:red">@error('projectleader'){{$message}}@enderror</span>


       <p> Project budget: </p>
       <input type ="number" name ="projectbudget" value="{{$user5->projectbudget}}" placeholder="Project budget">
      <span style ="color:red">@error('projectbudget'){{$message}}@enderror</span>
      
      <p> Total amount spent: </p>
       <input type ="number" name ="totalamountspent" value="{{$user5->totalamountspent}}" placeholder="Total amount spent">
      <span style ="color:red">@error('totalamountspent'){{$message}}@enderror</span>
      
      <p> Duration: </p>
       <input type ="datetime-local" name ="duration" value="{{$user5->duration}}" placeholder="Duration">
      <span style ="color:red">@error('duration'){{$message}}@enderror</span>

       <button type = "submit"> Add </button>
     
     </form>
     
    
    </div>   
    <br><br>

   <h1><a href="/projectslist">Back</a></h1> 

    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
</body>
</html>