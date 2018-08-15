<?php
include "connect.php";
$s1=$_POST['symptom1'];
$s2=$_POST['symptom2'];
$s3=$_POST['symptom3'];
$s4=$_POST['symptom4'];

$i=1;
//symptom 1

$sql=mysqli_query($con,"SELECT * FROM diseases WHERE symptom='$s1'");

$me=0;$m=0;$t=0;$a=0;$p=0;

while($r=mysqli_fetch_array($sql))
{
if($r['disease']=='Typhoid')
{
$t=$t+1;
}
else
if($r['disease']=='Anemia')
{
$a=$a+1;
}
else
if($r['disease']=='Malaria')
{
$m=$m+1;
}
else
if($r['disease']=='Pneumonia')
{
$p=$p+1;
}
else
if($r['disease']=='Menengitis')
{
$me=$me+1;
}

}

//Symptom 2

$sql2=mysqli_query($con,"SELECT * FROM diseases WHERE symptom='$s2'");

while($r=mysqli_fetch_array($sql2))
{
if($r['disease']=='Typhoid')
{
$t=$t+1;
}
else
if($r['disease']=='Anemia')
{
$a=$a+1;
}
else
if($r['disease']=='Malaria')
{
$m=$m+1;
}
else
if($r['disease']=='Pneumonia')
{
$p=$p+1;
}
else
if($r['disease']=='Menengitis')
{
$me=$me+1;
}

}

//Symptom 3

$sql3=mysqli_query($con,"SELECT * FROM diseases WHERE symptom='$s3'");

while($r=mysqli_fetch_array($sql3))
{
if($r['disease']=='Typhoid')
{
$t=$t+1;
}
else
if($r['disease']=='Anemia')
{
$a=$a+1;
}
else
if($r['disease']=='Malaria')
{
$m=$m+1;
}
else
if($r['disease']=='Pneumonia')
{
$p=$p+1;
}
else
if($r['disease']=='Menengitis')
{
$me=$me+1;
}

}


//Symptom 4

$sql4=mysqli_query($con,"SELECT * FROM diseases WHERE symptom='$s4'");

while($r=mysqli_fetch_array($sql4))
{
if($r['disease']=='Typhoid')
{
$t=$t+1;
}
else
if($r['disease']=='Anemia')
{
$a=$a+1;
}
else
if($r['disease']=='Malaria')
{
$m=$m+1;
}
else
if($r['disease']=='Pneumonia')
{
$p=$p+1;
}
else
if($r['disease']=='Menengitis')
{
$me=$me+1;
}

}

if($t>$a && $t>$m && $t>$me && $t>$p )
{
echo "<fieldset>MES diagnoses you with Typhoid,Please Take a Lab Test to Confirm <fieldset>";

echo "<fieldset><form action='drugs.php' method='post'>
<input type='hidden' name='dis' value='typhoid'>
<pre>
Lab Test Result : <select name='lab'>
<option>Positive</option>
<option>Negative</option>
</select>
<input  type='submit' value='Check Diagnosis'>
</pre>
</form><fieldset>";
}
else
if($m>$a && $m>$t && $m>$me && $m>$p )
{
echo "<fieldset>MES diagnoses you with Malaria,Please Take a Lab Test to Confirm</fieldset>";

echo "<fieldset><form action='drugs.php' method='post'>
<input type='hidden' name='dis' value='malaria'>
<pre>
Lab Test Result : <select name='lab'>
<option>Positive</option>
<option>Negative</option>
</select>
<input  type='submit' value='Check Diagnosis'>
</pre>
</form></fieldset>";

}
else
if($me>$a && $me>$t && $me>$m && $me>$p )
{
echo "<fieldset>MES diagnoses you with Menegitis,Please Take a Lab Test to Confirm</fieldset>";

echo "<fieldset><form action='drugs.php' method='post'>
<input type='hidden' name='dis' value='men'>
<pre>
Lab Test Result : <select name='lab'>
<option>Positive</option>
<option>Negative</option>
</select>
<input  type='submit' value='Check Diagnosis'>
</pre>
</form></fieldset>";

}
else
if($a>$m && $a>$t && $a>$me && $a>$p )
{
echo "<fieldset>MES diagnoses you with Anemia,Please Take a Lab Test to Confirm </fieldset>";
echo "<fieldset><form action='drugs.php' method='post'>
<input type='hidden' name='dis' value='ane'>
<pre>
Lab Test Result : <select name='lab'>
<option>Positive</option>
<option>Negative</option>
</select>
<input  type='submit' value='Check Diagnosis'>
</pre>
</form></fieldset>";
}
else
if($p>$a && $p>$t && $p>$me && $p>$m )
{
echo "<fieldset>MES diagnoses you with Pneumonia,Please Take a Lab Test to Confirm </fieldset>";
echo "<fieldset><form action='drugs.php' method='post'>
<input type='hidden' name='dis' value='pne'>
<pre>
Lab Test Result : <select name='lab'>
<option>Positive</option>
<option>Negative</option>
</select>
<input  type='submit' value='Check Diagnosis'>
</pre>
</form></fieldset>";
}
else
{
echo "<fieldset>MES Recommends a GENERAL LAB TEST</fieldset>";

}
echo "Typhoid = ".$t." Symptoms Matched<br>";
echo "Anemia = ".$a." Symptoms Matched<br>";
echo "Malaria = ".$m." Symptoms Matched<br>";
echo "Menengitis = ".$me." Symptoms Matched<br>";
echo "Pneumonia = ".$p." Symptoms Matched<br>";

?>