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
    <h1>Profile Register Form</h1>
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
            <form  action="<?php echo $action ?>" autocomplete="on" method="post"> 
            <h2> Sign up </h2> 
              <p> 
                <label for="username" class="Username"  >  Username </label>
                <input  name="username" type="text" placeholder="Masukkan Username Anda"/>
              </p>
              <p> 
                <label for="password" class="password"  >  Password </label>
                <input  name="password" type="text" placeholder="Masukkan Password Anda"/>
              </p>
               <p> 
                <label for="nama" class="nama"  >  Nama </label>
                <input  name="nama_supplier" type="text" placeholder="Masukkan Nama Anda"/>
              </p>
              <p> 
                <label for="jenis_kelamin" class="jenis_kelamin"  >  Jenis Kelamin </label>
                <input  name="jenis_kelamin" type="text" placeholder="Masukkan Jenis Kelamin Anda"/>
              </p>
              <p> 
                <label for="alamat" class="alamat"  >  Alamat </label>
                <input  name="alamat" type="text" placeholder="Masukkan Alamat Anda"/>
              </p>
              <p> 
                <label for="nohp_supplier" class="nohp_supplier"  >  No Hp </label>
                <input  name="nohp_supplier" type="text" placeholder="Masukkan No HP Anda"/>
              </p>
              <input type="hidden" name="kode_supplier" value="<?php echo $kode_supplier ?>">
              <p class="signin button"> 
                <input type="submit" value="<?php echo $button; ?>"/>
              </p>
              <p class="change_link">  
                Already a member ?
                <a href="<?php echo site_url('Login'); ?>" class="to_register">Log in</a>
              </p>
            </form>
          </div>
        </div>
      </div>  
    </section>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<br>
<br> 
<br>
  <div class="footer">
    <p>© 2016 Profile Login Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
  </div>
</body>
</html>