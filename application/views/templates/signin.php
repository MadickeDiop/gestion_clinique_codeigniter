


<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>




</head>




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
             <td>Enter Your Email </td>
          <td><input type="text" name="email"/></td>
       </tr>
        <tr>
         <td width="230">Enter Your Password </td>
        <td width="329"><input type="password" name="password"/></td>
          </tr> 
        <tr>
    <td colspan="2" align="center">
   <input type="submit" name="login" value="Login"/></td>
    </tr>
    </table>
</form>







<?php include("footer.php") ?> 





</body>
</html>