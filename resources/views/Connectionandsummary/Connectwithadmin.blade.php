<html>
<head>
   <title  style="color: indigo">Message to Admin</title>
   <link rel = "stylesheet" type="text/css" href="Css/registration2.css">
</head>

<body>
    <div class ="Registraiton">
     <h1> Message to Admin </h1>
     <form action ="" method ="post">
      @csrf
       <p> Name: </p>
       <input type ="text" name ="name" placeholder="Name">
      <span style ="color:red">@error('name'){{$message}}@enderror</span>
 
       <p> Email: </p>
       <input type ="text" name ="email" placeholder="Email">
      <span style ="color:red">@error('email'){{$message}}@enderror</span>
      
      <p> Subject: </p>
       <input type ="text" name ="subject" placeholder="Subject">
      <span style ="color:red">@error('subject'){{$message}}@enderror</span>
      
      <p> Message: </p>
       <input type ="text" name ="message" placeholder="Message">
      <span style ="color:red">@error('message'){{$message}}@enderror</span>

       <button type = "submit"> send </button>
     </form>
 
    </div>   

    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
</body>
</html>