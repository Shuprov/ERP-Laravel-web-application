<html>
<head>
   <title  style="color: indigo">Accounts payable</title>
   <link rel = "stylesheet" type="text/css" href="Css/registration.css">
</head>
 
<body>
    <div class ="Registraiton">
     <h1> Accounts payable </h1>
     <form action ="" method ="post">
      @csrf
       <p> Name: </p>
       <input type ="text" name ="name" placeholder="Name">
      <span style ="color:red">@error('name'){{$message}}@enderror</span>
 
       <p> User Name: </p>
       <input type ="text" name ="uname" placeholder="User-Name">
      <span style ="color:red">@error('uname'){{$message}}@enderror</span>
      
      <p> Password: </p>
       <input type ="password" name ="password" placeholder="Password">
      <span style ="color:red">@error('password'){{$message}}@enderror</span>
      
      <p> Gamil: </p>
       <input type ="text" name ="gmail" placeholder="Gmail">
      <span style ="color:red">@error('gmail'){{$message}}@enderror</span>

      <p> Payable: </p>
       <input type ="text" name ="payable" placeholder="Payable">
      <span style ="color:red">@error('payable'){{$message}}@enderror</span>

       <button type = "submit"> Add </button>
     
     </form>
     
    
    </div>   
    <br><br>

   <h1><a href="/Accountspayables">Back</a></h1> 

    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
</body>
</html>