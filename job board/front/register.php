<?php
include 'navbar.php';
?>


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">REGISTER</h2>
<ol class="breadcrumb">
<li><a href="index.php"><i class="ti-home"></i> Home</a></li>
<li class="current">REGISTER</li>
</ol>
</div>
</div>
</div>
</div>
</div>

<div id="content" class="my-account">
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6 cd-user-modal">
<div class="my-account-form">
<ul class="cd-switcher">
<li><a class="selected" href="#0" >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp  SIGN UP</a></li>
<li><a class="selected" href="#0"></a></li>


</ul>

<div id="cd-login" class="is-selected">
<div class="page-login-form">
<form role="form" class="login-form">

<a class="btn btn-common log-btn" href="jobseekerRegister.php">I want to work</a>
<a class="btn btn-common log-btn" href="companyRegister.php">I want to Hire</a>

</form>
</div>
</div>

<div id="cd-signup">
<div class="page-login-form register">
<form role="form" class="login-form">
<div class="form-group">
<div class="input-icon">
<i class="ti-user"></i>
<input type="text" id="sender-email" class="form-control" name="name" placeholder="Username">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="ti-email"></i>
<input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="ti-lock"></i>
<input type="password" class="form-control" placeholder="Password">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="ti-lock"></i>
<input type="password" class="form-control" placeholder="Repeat Password">
</div>
</div>
<button class="btn btn-common log-btn">Register</button>
</form>
</div>
</div>
<div class="page-login-form" id="cd-reset-password"> 
<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>
<form class="cd-form">
<div class="form-group">
<div class="input-icon">
<i class="ti-email"></i>
<input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
</div>
</div>
<p class="fieldset">
<button class="btn btn-common log-btn" type="submit">Reset password</button>
</p>
</form>
<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
</div> 
</div>
</div>
</div>
</div>
</div>

<?php
include 'footer.php';
?>

<a href="#" class="back-to-top">
<i class="ti-arrow-up"></i>
</a>
<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_one"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_four"></div>
<div class="object" id="object_five"></div>
<div class="object" id="object_six"></div>
<div class="object" id="object_seven"></div>
<div class="object" id="object_eight"></div>
</div>
</div>
</div>

<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/material.min.js"></script>
<script type="text/javascript" src="assets/js/material-kit.js"></script>
<script type="text/javascript" src="assets/js/color-switcher.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
</body>
</html>