<html>
    <head>
    <title> Accountant Manager </title>

    </head> 
    <body style="background-color: lightblue" >
        <?php
            $name="";
            $err_name="";
            $uname="";
            $err_uname="";
            $password="";
            $err_password="";
            $phone="";
            $err_phone="";
            $email="";
            $err_email="";
            $hasError=false;
            
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                
                $s= strpos($_POST["email"],"@");
            //$t = strpos($_POST["email"],".",$s+1);
            
            $x= strpos($_POST["pass"],"#");
            $y= strpos($_POST["pass"],"?");
            
                if(empty($_POST["uname"])){
                    $err_uname="*Username Required";
                    $hasError=true;
                }
                else if(strlen($_POST["uname"]) < 6){
                    $err_uname="*Username should be at least 6 characters";
                    $hasError=true;
                }
                else if(strpos($_POST["uname"]," ")){
                    $err_uname="*Space is not allowed";
                    $hasError=true;

                }
                else{
                    $uname=htmlspecialchars($_POST["uname"]);
                }
                if(empty($_POST["name"])){
                    $err_name="*Name Required";
                    $hasError=true;
                }
                else if(is_numeric($_POST["name"])){
                    $err_name="*Only string value is accepted";
                    $hasError=true;
                }
                else if(strlen($_POST["name"]) < 3){
                    $err_name="*Name should be at least 3 characters";
                    $hasError=true;
                }
                
                else{
                    $name=htmlspecialchars($_POST["name"]);
                }
                if(empty($_POST["pass"])){
                    $err_password = "*Password Required";
                    $hasError=true;
                }
                else if(strlen($_POST["pass"]) < 8){
                    $err_password="*Password should be at least 8 characters";
                    $hasError=true;
                }
                else if(ctype_upper($_POST["pass"])==true || ctype_lower($_POST["pass"])==true ){ 
                    $err_password="*Characters should contain combination of uppercase and lowercase";
                    $hasError=true;
                }
                else if($x==null && $y==null){ 
                    $err_password="*Characters should contain 1 special character eg.# or ?";
                    $hasError=true;
                }
                else{
                    $password=$_POST["pass"];
                }
                
                if(empty($_POST["phone"])){
                    $err_phone="*Phone number required";
                    $hasError=true;
                }
                else if(!is_numeric($_POST["phone"])){
                    $err_phone="*Only numerical value is accepted";
                    $hasError=true;
                }
                else if(strlen($_POST["phone"])!=11){
                    $err_phone="*Phone number should be exactly 11 characters";
                    $hasError=true;
                }
                
                else{
                    $phone=htmlspecialchars($_POST["phone"]);
                }
                
                if(empty($_POST["email"])){
                    $err_email="*Email address required";
                    $hasError=true;
                }
                else if(!strpos($_POST["email"],"@")){
                    $err_email="*Characters must contain @";
                    $hasError=true;

                }
                else if(!strpos($_POST["email"],".",$s+1)){
                    $err_email="*Characters must contain atleast 1 dot after @";
                    $hasError=true;

                }
                else{
                    $email=htmlspecialchars($_POST["email"]);
                }
                    
                
            
            }
            
        ?>

       

    
        <fieldset>
            
            <center><legend><h1 style="color: rgb(36, 4, 78)">Accountant sign in</h1></legend></center>
            <center>
            <form action="signin" method="post">
                <table>
                    
                    
                    
                    
                    <tr>
                        <td><span style="color: rgb(48, 3, 3)"> Name</span></td> 
                        <td>: <input type="text" value="<?php echo $name;?>" name="name">
                        <span><?php echo $err_name;?></span></td>
                        <!--<span style ="color:red">@error('name'){{$message}}@enderror</span> -->
                    </tr>
                    
                   <!-- <tr>
                        <td><span style="color:rgb(44, 3, 3)"> Username</span></td> 
                        <td>: <input type="text" value="<?php echo $uname;?>" name="uname">
                        <span><?php echo $err_uname;?></span></td>
                        
                    </tr>
                -->
                    
                    
                
                    <tr>
                        <td style="color: rgb(56, 3, 16)">Password</td>
                        <td>: <input type="password" value="<?php echo $password;?>" name="pass">
                        <span><?php echo $err_password;?></span></td>
                        <!--<span style ="color:red">@error('pass'){{$message}}@enderror</span> -->
                    </tr>
                    
                    <tr>
                        <td style="color: rgb(85, 4, 15)"> Email</td>
                        <td>: <input type="text" value="<?php echo $email;?>" name="email">
                        <span><?php echo $err_email;?></span></td>
                      <!--  <span style ="color:red">@error('email'){{$message}}@enderror</span> -->
                    </tr>
                    
                    <tr>
                        <td style="color: rgb(95, 2, 2)"> Phone</td>
                        <td>: <input type="text" placeholder="Number" value="<?php echo $phone;?>" name="phone">
                        <span><?php echo $err_phone;?></span></td>
                      <!--  <span style ="color:red">@error('phone'){{$message}}@enderror</span> -->
                        
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" name="submit" value="register"></td>
                    </tr>


                   
                    
                </table>
                <a href="/login">Back to login page</a>
                
            </form>
            </center>
        </fieldset>     

        <div class="container">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
           @endif 
         </div>

        @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
        
    </body>
</html>
