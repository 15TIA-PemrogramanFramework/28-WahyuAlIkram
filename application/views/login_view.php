<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
  <title>Profile Login Form Flat Responsive widget Template :: w3layouts</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Unique Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- font files  -->
  <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
  <!-- /font files  -->
  <!-- css files -->
  <link href="<?php echo base_url('assets2/') ?>css/animate-custom.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo base_url('assets2/') ?>css/style.css" rel='stylesheet' type='text/css' media="all" />
  <!-- /css files -->
</head>
<body>
  <div class="header">
    <h1>Profile Login Form</h1>
  </div>
  <div class="content"> 
    <section>       
      <div id="container_demo" >
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
          <div id="login" class="animate form">
            <div class="content-img">
              <img src="<?php echo base_url('assets2/') ?>images/user.png" alt="img" class="w3l-img">
            </div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('verifylogin'); ?>
              <h2>Login</h2> 
              <p> 
                <label for="username" class="uname" data-icon="u" >  Username </label>
                <input  name="username" type="text" placeholder="Masukkan Username Anda" />
              </p>
              <p> 
                <label for="password" class="youpasswd" data-icon="p">  Password </label>
                <input name="password" type="password" placeholder="Masukkan Password Anda" /> 
              </p>
              <p class="keeplogin"> 
                <div class="login-mail">
                  <label for="select" > Login As : 
                  <select name="pilihan">
                    <option value="1">Dealer</option>
                    <option value="2">Supplier</option>
                    <option value="3">Pembeli</option>
                  </select></label>
                </div>
              </p>
              <p class="login button"> 
                <input type="submit" value="Login" /> 
              </p>
              <p class="change_link">
                Not a member yet ?
                <a href="<?php echo site_url('Register'); ?>" class="to_register">Join us</a>
              </p>
            </div>
        </div>
      </div>  
    </section>
  </div>
  <div class="footer">
    <p>© 2016 Profile Login Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
  </div>
</body>
</html>