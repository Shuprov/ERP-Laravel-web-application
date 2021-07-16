<html>
<head>
   <title  style="color: indigo">Contact admin</title>
   <link rel = "stylesheet" type="text/css" href="Css/registration.css">
</head>
 
<body>
    <div class ="Registraiton">
     <h1> edit2 </h1>
     <form action ="" method ="post">
      @csrf
     
       <p> Name: </p>
       <input type ="text" name ="name" value="{{$user2->name}}" placeholder="Name">
      <span style ="color:red">@error('name'){{$message}}@enderror</span>
 
      <p> Email: </p>
      <input type ="text" name ="email" value="{{$user2->email}}" placeholder="Email">
     <span style ="color:red">@error('email'){{$message}}@enderror</span>
       <p> Subject: </p>
       <input type ="text" name ="subject" value="{{$user2->subject}}" placeholder="Subject">
      <span style ="color:red">@error('subject'){{$message}}@enderror</span>
      
      <p>Message: </p>
       <input type ="text" name ="message" value="{{$user2->message}}" placeholder="Message">
      <span style ="color:red">@error('message'){{$message}}@enderror</span>
      
     

     

       <button type = "submit" name="edit1">  edit1 </button>
     </form>
 
    </div>   
</body>
</html>