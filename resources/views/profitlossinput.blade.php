<html>
<head>
   <title  style="color: indigo">Profit loss input</title>
   <link rel = "stylesheet" type="text/css" href="Css/registration4.css">
</head>
 
<body>
    <div class ="Registraiton">
     <h1> Profit loss input </h1>
     <form action ="" method ="post">
      @csrf
       <p>Project Name: </p>
       <input type ="text" name ="projectname" placeholder="Project Name">
      <span style ="color:red">@error('projectname'){{$message}}@enderror</span>
 
       <p> Profit: </p>
       <input type ="number" name ="profit" placeholder="Profit">
      <span style ="color:red">@error('profit'){{$message}}@enderror</span>
      
      <p> Loss: </p>
       <input type ="number" name ="loss" placeholder="Loss">
      <span style ="color:red">@error('loss'){{$message}}@enderror</span>
      
      <p> Date: </p>
       <input type ="date" name ="date" placeholder="Date">
      <span style ="color:red">@error('date'){{$message}}@enderror</span>

       <button type = "submit"> Add </button>
     
     </form>
     
    
    </div>   
    <br><br>

   <h1><a href="/Profitloss">Back</a></h1> 

    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
</body>
</html>