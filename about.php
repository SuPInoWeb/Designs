<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<style>
	*{ 
	font-family: 'Josefin Sans', sans-serif;
	}
	section{
	margin:auto;
	margin-top:120px;
	width:90%;	
	}
	</style>
</head>

<body>
<nav class="black lighten-1">
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo">Inoweb</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">HOME</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="about.php">ABOUT</a></li>
         <li><a href="contact.php">CONTACT</a></li>
          <a class="waves-effect waves-light btn modal-trigger" href="#modal1" style="margin-top:10px;">SignUp</a>

      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.php">HOME</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="about.php">ABOUT</a></li>
         <li><a href="contact.php">CONTACT</a></li>
 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">SignUp</a>

  </ul>
 <section>
	<h2 class="center-align">About Us</h2>
    <div class="row">
    <div class="col s4 m4 l4 offset-l4"><hr></div>
    <div class="col m6 s12"> <img src="img/img6.jpg" class="responsive-img"></div>
     <div class="col m6 s12">
     <h4>Who am I??</h4>
     <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore at dolore magna alique. Ut enim ad minim veniam, quis nostrud exercitation ullamco labories nisi ut aliquip ex.</p>
<a href="" class="btn waves-effect waves-light blue white-text ">Know More</a>
     </div>
    </div>
</section>
<section>
	<h2 class="center-align">My College Degree</h2>
    <div class="row">
    <div class="col s4 m4 l4 offset-l4"><hr></div>
    </div>
     <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Btech</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Diploma</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
     
</section>

  <footer class="page-footer black">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div>
                <span class="right">
Follow us on
<a href="" class="btn btn-floating white"><i class="fa fa-whatsapp green" aria-hidden="true"></i></a>
<a href="" class="btn btn-floating white"><i class="fa fa-facebook-square blue" aria-hidden="true"></i></a>
<a href="" class="btn btn-floating white"><i class="fa fa-instagram pink" aria-hidden="true" ></i></a>
<a href="" class="btn btn-floating white"><i class="fa fa-twitter blue" aria-hidden="true"></i></a>
<a href="" class="btn btn-floating white"><i class="fa fa-youtube-play red" aria-hidden="true" ></i></a>
</span>
              </div>
            </div>
          </div>
            
          <div class="footer-copyright">
            <div class="container">
            © 2020 INOWEB
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>    
<script>
   $(document).ready(function(){
    $('.sidenav').sidenav();
	 $('.collapsible').collapsible();
	 });
  
  </script>
</body>
</html>
