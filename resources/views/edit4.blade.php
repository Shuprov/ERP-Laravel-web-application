<html>
<head>
   <title  style="color: indigo">Profit Loss</title>
   <link rel = "stylesheet" type="text/css" href="Css/registration.css">
</head>
 
<body>
    <div class ="Registraiton">
     <h1> edit4 </h1>
     <form action ="" method ="post">
      @csrf
     
       <p> Project Name: </p>
       <input type ="text" name ="projectname" value="{{$user4->projectname}}" placeholder="Name">
      <span style ="color:red">@error('projectname'){{$message}}@enderror</span>
 
      <p> Profit: </p>
      <input type ="number" name ="profit" value="{{$user4->profit}}" placeholder="Profit">
     <span style ="color:red">@error('profit'){{$message}}@enderror</span>
       <p> Loss: </p>
       <input type ="number" name ="loss" value="{{$user4->loss}}" placeholder="Loss">
      <span style ="color:red">@error('loss'){{$message}}@enderror</span>
      
      <p>Date: </p>
       <input type ="date" name ="date" value="{{$user4->date}}" placeholder="Date">
      <span style ="color:red">@error('date'){{$message}}@enderror</span>
      
     

     

       <button type = "submit" name="edit1">  edit1 </button>
     </form>
 
    </div>   
</body>
</html>