<?php
require_once('lib/db.php');
if(!empty($_SESSION["user_id"])){
    header("Location:/user/dashboard");
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Ecoops</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	
	        <div class="login-page">
              <div class="form">
                  <h2>Ecoops</h2>
                <form class="register-form" method="POST" >
                  <input type="text" name="usersurname" placeholder="Enter your surname"/>
                  <input type="text" name="userfirstname" placeholder="Enter your firstname"/>
                  <input type="text" name="usermiddlename" placeholder="Enter your middle name"/>
                  <input type="email" name="email_reg" placeholder="Enter your email address"/>
                  <input type="password" name="password_reg" placeholder="Enter your password"/>
                  <input type="text" name="userphone" placeholder="Enter your phonenumber"/>
                  <button type="submit" name="register">create</button>
                  
                  <!--/////////////////////// php register validation starts here /////////////////////// -->
                  
                  <?php
                                 
                                
                                 if (isset($_POST['register'])){
                                     $usersurname = $_POST['usersurname'];
                                     $userfirstname = $_POST['userfirstname'];
                                     $usermiddlename = $_POST['usermiddlename'];
                                     $password = $_POST['password_reg'];
                                     $user_email = $_POST['email_reg'];
                                     $userphone = $_POST['userphone'];
                                     $today = date("Y-m-d");
                                     
                                     if(!empty($user_email)){
                                         $sql = mysqli_query($con,"INSERT INTO users(email,password,surname,firstname,middlename,phone,date_created) VALUES('$user_email','$password','$usersurname','$userfirstname','$usermiddlename','$userphone','$today') ");
                                         echo '<script type="text/javascript">';
     
                                         echo 'setTimeout(function () { swal("Success!","Welcome to Ecoops; Your account is created successfully!","success");';
                                                                                 
                                         echo '}, 1000);</script>';
                                         
                                         
                                         
                                         $sql_validate = mysqli_query($con,"SELECT * from users WHERE phone='$userphone' AND password='$password' ");
                                                              while($row=mysqli_fetch_array($sql_validate)){
                                                                  
                                                                  $user_id = $row['user_id'];
                                                                  $user_firstname = $row['firstname'];
                                                                  $user_phone = $row['phone'];
                                                                  $user_email = $row['email'];
                                                                  $acc_bankname = $row['acc_bankname'];
                                                              }
                                                              
                                                                  
                                                              if(mysqli_num_rows($sql) > 0  &&  !empty($acc_bankname)){
                                                                  
                                                                  
                                                                  $_SESSION["user_id"] = $user_id;
                                                                  $_SESSION['type'] = "user";
                                                                  $_SESSION["user_firstname"] = $user_firstname;
                                                                  $_SESSION['user_phone'] = $user_phone;
                                                                  $_SESSION['user_email'] = $user_email;
                                                                  
                                                                  header("Location:/user/dashboard");
                                                              }
                                       
                                       					else if(mysqli_num_rows($sql) > 0  &&  empty($acc_bankname)){
                                                                  
                                                                  
                                                                  $_SESSION["user_id"] = $user_id;
                                                                  $_SESSION['type'] = "user";
                                                                  $_SESSION["user_firstname"] = $user_firstname;
                                                                  $_SESSION['user_phone'] = $user_phone;
                                                                  $_SESSION['user_email'] = $user_email;
                                                                  
                                                                  header("Location:/user/profileupdate");
                                                              }
                                         
                                         
                                     }
                                 }
                    ?>
                  
                  <!--/////////////////////// php register validation ends here /////////////////////// -->
                  <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>
                
                
                <form class="login-form" method="POST" >
                  <input type="text" name="phone" placeholder="Phone number"/>
                  <input type="password" name="password" placeholder="password"/>
                  <button type="submit" name="login">login</button>
                  <br/>
                  <br/>
                  <!--/////////////////////// php login validation starts here /////////////////////// -->
                                                  
                                                  <?php
                                                  
                                                          
                                              
                                                  if (isset($_POST['login'])){
                                                          $user_phone = $_POST['phone'];
                                                          $password = $_POST['password'];
                                                          
                                                          $sql = mysqli_query($con,"SELECT * from users WHERE phone='$user_phone' AND password='$password' ");
                                                              while($row=mysqli_fetch_array($sql)){
                                                                  
                                                                  $user_id = $row['user_id'];
                                                                  $user_firstname = $row['firstname'];
                                                                  $acc_number = $row['acc_number'];
                                                                  $user_phone = $row['phone'];
                                                                  $user_email = $row['email'];
                                                              }
                                                              
                                                                  
                                                              if(mysqli_num_rows($sql) > 0  &&  empty($acc_number)){
                                                                  
                                                                  
                                                                  $_SESSION["user_id"] = $user_id;
                                                                  $_SESSION['type'] = "user";
                                                                  $_SESSION["user_firstname"] = $user_firstname;
                                                                  $_SESSION['user_phone'] = $user_phone;
                                                                  $_SESSION['user_email'] = $user_email;
                                                                  
                                                                 
                                                                      
                                                                               if (headers_sent()) {
                                                                                            die("Redirect failed. Please click on this link: <a href='/user/profileupdate'>Continue ==></a>");
                                                                                        }
                                                                                        else{
                                                                                            exit(header("Location:/user/profileupdate"));
                                                                                        }
                                                                                    
                                                              }
                                                                 else if(mysqli_num_rows($sql) > 0  &&  !empty($acc_number)){
                                                                  $_SESSION["user_id"] = $user_id;
                                                                  $_SESSION['type'] = "user";
                                                                  $_SESSION["user_firstname"] = $user_firstname;
                                                                  $_SESSION['acc_number'] = $acc_number;
                                                                  $_SESSION['user_phone'] = $user_phone;
                                                                  $_SESSION['user_email'] = $user_email;
                                                                   
                                                                   
                                                                                if (headers_sent()) {
                                                                                            die("Redirect failed. Please click on this link: <a href='/user/dashboard'>Continue ==></a>");
                                                                                        }
                                                                                        else{
                                                                                            exit(header("Location:/user/dashboard"));
                                                                                        }
                                                              }
                                                                  
                                                              
                                                              else{
                                                                  echo"<span class='text-center' style='color:red;'>Invalid login details</span>";
                                                              }
                                                      
                                                      
                                                  }
                                                  
                                                  ?>
                                                  
                                                  <!--/////////////////////// php login validation ends here /////////////////////// -->
                  <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
              </div>
            </div>
            
            
            
            
            
            
             
	
</body>

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background:#e0312f;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #ed4947;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #1f8ccc; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #1f8ccc, #248ac9);
  background: -moz-linear-gradient(right, #1f8ccc, #248ac9);
  background: -o-linear-gradient(right, #1f8ccc, #248ac9);
  background: linear-gradient(to left, #1f8ccc, #248ac9);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>   
<script>
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>

</html>