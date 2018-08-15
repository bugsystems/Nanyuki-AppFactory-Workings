<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>medical expert system</title>
<!-- InstanceEndEditable -->
<meta name="keywords" content="Free CSS Template, Architect Website, XHTML, CSS" />
<meta name="description" content="Architect is a free CSS template or a free XHTML CSS layout for everyone." />
<link href="becky_style.css" rel="stylesheet" type="text/css" />
<link href="fullsize/fullsize.css" media="screen" rel="stylesheet" type="text/css" />

<script src="jquery-ui-1.8.21.custom/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery-ui-1.8.21.custom/js/jquery-ui-1.8.21.custom.min.js"></script>

<script type="text/javascript" src="fullsize/jquery.js"></script>
<script type="text/javascript" src="fullsize/jquery.fullsize.minified.js"></script>  

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

$(function(){
				$("div.templatemo_gallery img").fullsize();
			});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#target').click(function() {

                 $('#dialog').dialog('open');

    return false;
    });

    $('img').click(function() {

         $('#dialog').dialog('close');

    });
    });
	</script>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body>
	<div id="templatemo_container">
   	  <div id="templatemo_header">
       
        	<div id="templatemo_menu">
            	<ul>
                    <li><a href="index.php" class="current">Home</a></li>
                    <li><a href="diagnose.php">Diagnos Disease </a></li>
                    <li><a href="ache.php">Treat Commom aches </a></li>
                    <li><a href="about.php">About Us </a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                </ul> 
        </div>
        </div>
        <div class="templatemo_section_1">
		<div align="right">
		<?php
		include "header_check.php";
		?>
		</div>
		<!-- InstanceBeginEditable name="EditRegion4" -->
          <div class="templatemo_section_1_contentarea">
            <div class="cleaner"></div>
          </div>
          <!-- InstanceEndEditable -->
          <div class="cleaner"></div>
              <div class="templatemo_section_1_bottom">
          </div>
        </div><!-- InstanceBeginEditable name="EditRegion2" -->
		<div>
        
        <?php
include "connect.php";
$dis=$_POST['dis'];
$lab=$_POST['lab'];
if($lab=='Positive')
{
if($dis=='typhoid')
{
echo "Please take one of the following Drug Combinations:<br>";
$sql=mysqli_query($con,"SELECT * FROM diagnosis WHERE disease='Typhoid'");
echo "<ul>";
while($row=mysqli_fetch_array($sql))
{
echo "<li>".$row['drug']."</li>";
}
echo "</ul>";
}
else
if($dis=='malaria')
{
echo "Please take one of the following Drug Combinations:<br>";
$sql=mysqli_query($con,"SELECT * FROM diagnosis WHERE disease='Malaria'");
echo "<ul>";
while($row=mysqli_fetch_array($sql))
{
echo "<li>".$row['drug']."</li>";
}
echo "</ul>";
}
else
if($dis=='men')
{
	echo "Please take one of the following Drug Combinations:<br>";
$sql=mysqli_query("SELECT * FROM diagnosis WHERE disease='Menengitis'");
echo "<ul>";
while($row=mysqli_fetch_array($sql))
{
echo "<li>".$row['drug']."</li>";
}
echo "</ul>";
}
else
if($dis=='ane')
{
	echo "Please take one of the following Drug Combinations:<br>";
$sql=mysqli_query($con,"SELECT * FROM diagnosis WHERE disease='Anemia'");
echo "<ul>";
while($row=mysqli_fetch_array($sql))
{
echo "<li>".$row['drug']."</li>";
}
echo "</ul>";

}
if($dis=='pne')
{
	echo "Please take one of the following Drug Combinations:<br>";
$sql=mysqli_query($con,"SELECT * FROM diagnosis WHERE disease='Pneumonia'");
echo "<ul>";
while($row=mysqli_fetch_array($sql))
{
echo "<li>".$row['drug']."</li>";
}
echo "</ul>";
}
}
else
{
	echo "<fieldset>SEE A DOCTOR FOR MORE DIAGNOSIS</fieldset>";
}



?>
        
        </div>
		<!-- InstanceEndEditable -->
    <div class="cleaner"></div>
        <div id="templatemo_footer">Copyright © 2013 <a href="#">Becky</a><a href="http://www.templatemo.com/page/1" target="_parent"></a> </div>
    </div><!-- End Of Container -->
<!--  Free CSS Templates by TemplateMo.com  -->
</body>
<!-- InstanceEnd --></html>