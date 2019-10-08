


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>





<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css') ?> ">
<link href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?> " rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/ plugins/OwlCarousel2-2.2.1/animate.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/main_styles.css') ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/responsive.css') ?> ">









</head>
<body>

<?php include("header.php")?>

<?php include("navbar.php") ?> 



<form method="post">
<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
    <tr>
        <td colspan="2"><?php echo @$error; ?></td>
    </tr>   
  <tr>
    <td width="230">Enter Your Name </td>
    <td width="329"><input type="text" name="name"/></td>
  </tr>
  
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email"/></td>
  </tr>
  <tr>
    <td>Enter Your Mobile </td>
    <td><input type="text" name="phone"/></td>
  </tr>
  <tr>
    <td>Enter Your Password </td>
    <td><input type="password" name="password"/></td>
  </tr>
 <tr>
    <td colspan="2" align="center">
    <input type="submit" name="save" value="Register Me"/></td>
  </tr>
</table>
    </form>











<?php include("footer.php") ?> 







<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?> "></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/popper.js') ?> "></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.js') ?> "></script>
<script src="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') ?> "></script>
<script src="<?php echo base_url('assets/plugins/easing/easing.js') ?> "></script>
<script src="<?php echo base_url('assets/plugins/parallax-js-master/parallax.min.js') ?> "></script>
<script src="<?php echo base_url('assets/js/custom.js') ?> "></script>


</body>
</html>