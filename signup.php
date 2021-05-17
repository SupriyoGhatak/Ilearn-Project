<?php

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
  <head>
      <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/logo_1.png" style="height: 40px; width: 40px;" type="image/png" />
    
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style2_login.css">
    
    
    <body>
       
        <section>
            <div class="container">
                <div class="user signinBx">
                    <div class="imgBx"><img src="img/login/bg1.jpeg"></div>
                    <div class="formBx">
                        <form>
                            <h2>LOGIN</h2>
                            <input type="text" name="" placeholder="Username" required/>
                            <input type="password" name="" placeholder="Password" required/>
                            <center><input type="submit" name="" value="Login"></center>
                            <br>
                            
                            <center><p class="signup">Don't Have A Account ? <a href="#" onclick="toggleForm();">Sign Up</a></p></center>
                        </form>
                    </div>
                         
                </div>
                <div class="user signupBx">
                    
                    <div class="formBx">
                        <form>
                            <h2>CREATE AN ACCOUNT</h2>
                            <input type="text" name="" placeholder="Name"  required/>
                            <input type="email" name="" placeholder="Email"  required/>
                            <input type="password" name="" placeholder="Create Password" required/>
                            <input type="password" name="" placeholder="Confirm Password"  required/>
                            
                            <center><input type="submit" name="" value="Sign Up"></center>
                            <br>
                            
                            <center><p class="signup">Already have a Account? <a href="#" onclick="toggleForm();">LogIn</a></p></center>
                        </form>
                        
                    </div>
                    <div class="imgBx"><img src="img/login/b3.jpg"></div>    
                </div>
            </div>
        </section>
        <script type="text/javascript">
            function toggleForm()
            {
                var container=document.querySelector('.container');
                container.classList.toggle('active')
            }
        </script>
  </head>
</html>