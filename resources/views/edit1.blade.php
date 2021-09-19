<html>
<head>
   <title  style="color: indigo">Receivable edit</title>
   <link rel = "stylesheet" type="text/css" href="Css/registration.css">
</head>
 
<body>
    <div class ="Registraiton">
     <h1> edit1 </h1>
     <form action ="" method ="post">
      @csrf
     
       <p> Name: </p>
       <input type ="text" name ="name" value="{{$user1->name}}" placeholder="Name">
      <span style ="color:red">@error('name'){{$message}}@enderror</span>
 
       <p> User Name: </p>
       <input type ="text" name ="uname" value="{{$user1->uname}}" placeholder="User-Name">
      <span style ="color:red">@error('uname'){{$message}}@enderror</span>
      
      <p> Password: </p>
       <input type ="password" name ="password" value="{{$user1->password}}" placeholder="Password">
      <span style ="color:red">@error('password'){{$message}}@enderror</span>
      
      <p> Gmail: </p>
       <input type ="text" name ="gmail" value="{{$user1->gmail}}" placeholder="Gmail">
      <span style ="color:red">@error('gmail'){{$message}}@enderror</span>

      <p> Receivable: </p>
       <input type ="text" name ="receivable" value="{{$user1->receivable}}" placeholder="Receivable">
      <span style ="color:red">@error('receivable'){{$message}}@enderror</span>

       <button type = "submit" name="edit1">  edit1 </button>
     </form>
 
    </div>   
</body>
</html>