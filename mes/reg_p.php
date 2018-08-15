<html>
<head>
<script type="text/javascript" src="jquery-ui-1.8.21.custom/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.8.21.custom/js/jquery-ui-1.8.21.custom.min.js"></script>
<link href="jquery-ui-1.8.21.custom/css/cupertino/jquery-ui-1.8.21.custom.css" type="text/css" />
<link href="jquery-ui-1.8.21.custom/development-bundle/themes/cupertino/jquery.ui.all.css" type="text/css" rel="stylesheet"/>

</head>
<body>


<?php
include "connect.php";
$name=$_POST['name'];
$date=$_POST['date'];
$address=$_POST['address'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$c_pass=$_POST['c_pass'];


$sql=mysqli_query($con,"INSERT INTO users VALUES(NULL,'$name','$date','$address','$email','$pass')")or die(mysqli_error());

if($sql)
{
echo "<script>
  $(function() {
    $( '#dialog' ).dialog({
        width: 460,
        hide: 'slide',
        position: 'center',
        show: 'slide',
        close: function(event, ui) { location.href = 'login.php' }
    });
  });
  </script>";
?>
<div id="dialog" title="Basic dialog">
  <p>You have Sucessfully registered</p>
</div>
<?php

	}
?>
</body>
</html>