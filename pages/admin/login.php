<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
  <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <form action="" method="POST">
              <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Login</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="phone" name="phone"/>
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" name="password" class="form-control" placeholder="password"/>
                    </div>
                    <?php
              if (isset($_POST['login'])){
                      $user_phone = $_POST['phone'];
                      $password = $_POST['password'];

                        $sql = $db->get("admin", "*", [
                          "phone" => $user_phone,
                          "password" => $password
                        ]);
                                   
                          if($sql){
                            
                              $_SESSION["type"] = "admin";
                              $_SESSION["role"] = $sql['role'];
                              $_SESSION["fname"] = $sql['fname'];
                              $_SESSION['lname'] = $sql['lname'];
                              $_SESSION['phone'] = $sql['phone'];
                              
                              if (headers_sent()) {
                                  die("Redirect failed. Please click on this link: <a href='https://ecoops-financial.com/dashboard/admin/dashboard.php'>Continue ==></a>");
                                }
                                else{
                                    exit(header("Location:/admin/dashboard"));
                                }
                              
                          }
                          else{
                              echo"<span class='text-center' style='color:red;'>Invalid login details</span>";
                          }
              }
              ?> 
                  
                    <button name="login" type="submit" class="btn btn-primary shadow-2 mb-4">Login</button>
                    <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html">Reset</a></p>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html">Signup</a></p>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>