<?php
require_once('config_me.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER REGISTRATION ||PHP</title>

    <link rel="stylesheet" type="text/css" href="css_bootstrap\bootstrap.min.css">
</head>
<body>


<div>
<script src="3.4.1.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php

    if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $password=$_POST['password'];
    $sql="INSERT into users (firstname,lastname,email,phonenumber,password) VALUES(?,?,?,?,?)";
    $insert_stm=$db->prepare($sql)->execute([$firstname,$lastname,$email,$phonenumber,$password]);
    #$result= $insert_stm->execute([$firstname,$lastname,$email,$phonenumber,$password]);
    if($insert_stm==True){
        //echo "saved";
    
    }
    else{
        echo "filed";
    }
}
    

 ?>
 
</div>
<div>
    <div class="col">
        <div class="col-sm-3">

            <form action="registration_me.php" method="post">
                <div class="container">
                <h1>Registration</h1>
                <p class="mb-3">Fill the form with the correct values</p>
                
                <label for="firstname" ><b>FirstName</b></label>
                <input  class="form-control" type="text" name="firstname" required>

                <label for="lastname"><b>LastName</b></label>
                <input class="form-control" type="text" name="lastname" required>
                <label for="email"><b>email</b></label>
                <input class="form-control" type="text" name="email" required>
              
                <label for="phonenumber"><b>PhoneNumber</b></label>
                <input  class="form-control" type="text" name="phonenumber" required>

                <label for="password" ><b>PassWord</b></label>
                <input  class="form-control" type="password" name="password" required>
               <br class="mb-2">
                <input class="btn btn-primary" id="submit_100" class="form-control" name="submit" type="submit" value="SignUp">
            </form>
            
        </div>
    </div>
</div>


<script type=text/javascript> 
$(function(){
    /*erro here I will try to fix later*/
    /*
  $('#submit_100').click(function(){
      swal.fire({
          'title':"welcome",
          'type':'success',
          'text':'this from khaled abdalmoaty website'
      })
  });
}); 

   
</script>
*/
    
</body>
</html>
 
       