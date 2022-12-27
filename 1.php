<!DOCTYPE html>
<html>
    <head>
       
    </head>
    

    <body>
<?php
      include 'connect.php';
      $table='users';
      if(isset($_GET['save']))
      {
        $firstname=$_GET['firstname'];
        $lastname=$_GET['lastname'];
        $email=$_GET['email'];
        $password=$_GET['password'];
        $query="insert into $table(first_name,last_name,email,password) values('$firstname','$lastname','$email','$password')";
        $result=mysqli_query($connect,$query);
        echo('csada');
      }


      ?>


<form  method="get" class="signup" id="form2">
                    <div class="field " id="firstname_field">
                      <input type="text" name="firstname" id="firstname" placeholder="First Name" autocomplete="off" >
                      <small>Error Message</small>
                   </div>
                   <div class="field " id="lastname_field">
                    <input type="text" name="lastname" id="lastname" placeholder="Last Name" autocomplete="off" >
                    <small>Error Message</small>
                 </div>
                      <div class="field ">
                         <input type="text" id="email" name="email" placeholder="Email Address" autocomplete="off" >
                         <small>Error Message</small>
                      </div>
                     
                      <div class="field ">
                         <input type="password" name="password" id="Register_password" placeholder="Password" autocomplete="off" >
                         <small>Error Message</small>
                      </div>
                     
                      <div class="field ">
                         <input type="password" id="password2" placeholder="Confirm password" autocomplete="off" >
                         <small>Error Message</small>
                      </div>
                      <input class="btn-layer" name="save" type="submit" value="sign up">
                   </form>

                   
    </body>

</html>