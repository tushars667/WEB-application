<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "select * from sign_up where Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count == 1) {
        $_SESSION['myusername']="username";
        $_SESSION['login_user'] = $myusername;
       
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
          
        
         
         header("Location: log in.php");
      }else {
          
         echo '<script>alert("Incorrect Email ID or Password")</script>';
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gym manager</title>
	<style>
		{
    box-sizing: border-box;
}
body{
	background-image: url("images/12.jpeg");
	background-repeat: no-repeat;
	background-size: cover;
	margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 400;	
}

.wrapper{
    margin: 0 auto;
    width: 100%;
    max-width: 1140px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.container{
    position: relative;
    width: 100%;
    max-width: 600px;
    height: auto;
    display: flex;
    background: #ffffff;
    box-shadow: 0 0 5px #999999;
}
.login .col-left,
.login .col-right{
    padding: 30px;
    display: flex;
}
.login .col-left{
    width: 60%;
    clip-path: polygon(0 0, 0% 100%, 100% 0 );
    color: white;
    background: black;
}
.login .col-right{
    padding: 60px 30px;
    width: 50%;
    margin-left: -10%;
}

@media(max-width: 575px){
    .login .container{
        flex-direction: column;
        box-shadow: none;
    }
    .login .col-left,
    .login .col-right{
     width: 100%;
     margin: 0;
     clip-path: none;
    }
    .login .col-right{
        padding: 30px;
    }

    
}


.login .login-text h2{
    margin: 0 0 15px 0;
    font-size: 30px;
    font-weight: 700;
}
.login .login-text p{
    margin: 0 0 20px 0;
    font-size: 16px;
    font-weight: 500;
    line-height: 22px;
}



.login .login-form{
    position: relative;
    width: 100%;
}
.login .login-form h2{
    margin: 0 0 15px 0;
    font-size: 22px;
    font-weight: 700;
		}

.login .login-form p a{
    color: #44c7f5;
    font-size: 14px;
    text-decoration: none;
}


.login .login-form input{
    display: block;
    width: 100%;
    height: 35px;
    padding: 0 10px;
    outline: none;
    border: 1px solid #cccccc;
    border-radius: 30px;
}

.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}

	
	</style>
</head>

<body>
	<div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
					<h2>Member Details</h2>
                </div>
            </div>

            <div class="col-right">
                <div class="form_input">
                    <h2>Log in</h2>
                    <form method ="POST" action='#'>
                        <p>
                            <label>Enter your Email/phone number<span>*</span></label>
                            <input  type="text" name="username" placeholder="ENTER your e-mail id/phone number"/>
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input type="password" name="password" placeholder="enter your password"/>

                        </p>
                        <input type = "submit" value = " Submit "/>
                       
                        
                       
                        
                        <p>
                            <a href="sign up.php">CREATE ACCOUNT</a>
                        </p>

                    </form>
                </div>
            </div>

        </div>
    </div>
   
     



</body>
</html>
