<?php
@session_start();
require_once 'config.php';   //connect to the database
require_once 'lib/statistics/login_statistics.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/LOR_LOGIN.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>e-NOSHA</title>
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
body, td, th {
	color: #000033;
}

}
.style12 {
	font-size: xx-large;
	font-weight: bold;
}
-->
</style>
<script language="javascript">
//==========================================User registration Confirmation message ===============================
//close the div in 5 seconds
window.setTimeout("closeHelpDiv();", 20000);

function closeHelpDiv(){
document.getElementById("helpdiv").style.display=" none";
}
</script>
<!-- InstanceEndEditable -->
<style type="text/css">
<!--
.style3 {color: #000033}
-->
</style>
</head>
<body>
<div id="wrap">
  <div id="header"><!-- InstanceBeginEditable name="ul" -->
    <ul id="nav">
      <?php 
	  
  print_navbar();
	   
	   ?>
      <div id="helpdiv" style="display:block">
        <p align="center"> <?php echo "<br><font color="."#FFFFFF"."><b>"; echo $_SESSION['reg_msg']; echo "</b></font>"?></p>
      </div>
    </ul>
    <!-- InstanceEndEditable -->
  </div>
  <!-- /header -->
  <div id="content">
    <div id="inner">
      <div class="left float-l"><!-- InstanceBeginEditable name="EditRegion8" -->
	              <form name="login" action="lib/login/session.php" method="post" >
                          <div align="center">
                            <?php

					   if(($_SESSION['type_name']!=null)){
					   
					   $name=$_SESSION['name'];
					   ?>
                            
                            <?php
 
			   echo $welcome_msg ."<a href='".$weburl."/lib/admin/users/edit_user.php?id=".$_SESSION['id']."'>".$name."</a><br><br><br></div>";
			   
			  echo  '<div><b><font size="5">Getting Started</font></b><br />';
				 echo  '<font size="3">Use the menus above for, <br />';
				 echo  '<ol type="1">';
				 echo  '<li>	Upload – upload a learning resource </li>';
				 echo  '<li>	Search – Search for learning resources</li></font>';
				 if($_SESSION['id']=='1'){
				 echo '<font size="3"><li>	Administration – Set up the system </li>';
				echo ' <li>	User management – Manage the system users </li></font>';
				 }
				 echo  '</ol>';
				 //echo  '</div>';
	  

			   
			   }else{  ?>
                          </div>
                          <h2 align="center"><?php echo $login ?></h2>
	                      <div align="center">
	                        <?php
   
	echo"<table border=0>";
	echo "<tr>";
    echo"<td>".$username."</td>";
    echo"<td><input type='text'  name='uname'></td>";
    echo "</tr>";
  
    echo "<tr>";
    echo"<td>".$password."</td>";
    echo"<td><input type='password'  name='pwd'></td>";
    echo "</tr>";
  
    echo "<tr>"; 
    echo "<th colspan='2' scope='row' ><span class='style11'>".$_SESSION['msg']."</span></th>";
    echo "</tr>";
  
    echo "<tr>"; 
    echo "<td><a class='button' href='javascript:document.login.submit();'><span>Login</span></a> </td>";
    echo "</tr>";
    echo"</table>";  
    echo "<br>";
    echo"<table width=200 border=0><tr><td>";
    echo $dont_have_an_account."&nbsp";
    echo "<a href=".$weburl."/lib/register/register.php><b>$register</b></font></a>";
    echo"</td></tr><tr><td><a href=".$weburl."/lib/forgot_password/forgot_password.php>".$forgotten_pass."?</font></a></td></tr></table>";   
    echo "<br>";
	}
unset($_SESSION['msg']);
unset($_SESSION['reg_msg']);
			   ?>
                                  </div>
            </form>
            
	  
	  
	  <!-- InstanceEndEditable -->      </div>
      <div class="right folat-r">
        <div id="side">
		 <div id="bm"><!-- InstanceBeginEditable name="EditRegion9" -->
            
            <!-- InstanceEndEditable -->
		   
          </div>
          <div id="top">
            <p>&nbsp;</p>
            <p><b>Team Members</b></p>
            <p>&nbsp;</p>
            <p>Isuru Balasooriya</p>
            <p>Enosha Hettiarachchi</p>
            <p>Mathias Hatakka</p>
            <p>Peter Mozelius</p>
            <p>Dr. K.P. Hewagamage</p>
            <p>Dr. D.D. Karunarathne</p>
            <p>&nbsp;</p>
            <p><b>Acknowledgements</b></p>
            <p>Thilini Chathurika </p>
            <p>Sirani Hewage</p>
            
            </ul>
            <p><img src="images/logos.png" width="170" /></p>
           
            <!-- InstanceBeginEditable name="EditRegion6" --><!-- InstanceEndEditable --></div>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
  <div id="footer"><div align="center">
    
    <p id="copyright"> eNOSHA  is Free Software released under the GNU/GPL License.</p>
  </div></div>
  <!-- /footer -->
</div>
</body>
<!-- InstanceEnd --></html>
