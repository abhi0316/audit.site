<html>

<head>

<script type="text/javascript">
function checkform()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton').disabled = false;
    }
    else {
        document.getElementById('submitbutton').disabled = 'disabled';
    }
}
function checkform1()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton1').disabled = false;
    }
    else {
        document.getElementById('submitbutton1').disabled = 'disabled';
    }
}
function checkform2()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton2').disabled = false;
    }
    else {
        document.getElementById('submitbutton2').disabled = 'disabled';
    }
}
function checkform3()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton3').disabled = false;
    }
    else {
        document.getElementById('submitbutton3').disabled = 'disabled';
    }
}
function checkform4()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton4').disabled = false;
    }
    else {
        document.getElementById('submitbutton4').disabled = 'disabled';
    }
}
function checkform5()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton5').disabled = false;
    }
    else {
        document.getElementById('submitbutton5').disabled = 'disabled';
    }
}
function checkform6()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton6').disabled = false;
    }
    else {
        document.getElementById('submitbutton6').disabled = 'disabled';
    }
}
function checkform7()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton7').disabled = false;
    }
    else {
        document.getElementById('submitbutton7').disabled = 'disabled';
    }
}
function checkform8()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton8').disabled = false;
    }
    else {
        document.getElementById('submitbutton8').disabled = 'disabled';
    }
}
function checkform9()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton9').disabled = false;
    }
    else {
        document.getElementById('submitbutton9').disabled = 'disabled';
    }
}
function checkform10()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton10').disabled = false;
    }
    else {
        document.getElementById('submitbutton10').disabled = 'disabled';
    }
}
function checkform11()
{
    var cansubmit = true;
    if (cansubmit) {
        document.getElementById('submitbutton11').disabled = false;
    }
    else {
        document.getElementById('submitbutton11').disabled = 'disabled';
    }
}




</script>

<style type="text/css">
    .container{
        padding-top: 100px;
        margin-left:100px;
        height: auto;
        width: auto;
    }

   .left {
        display: block;
        margin-left:20px;
        float: left;
        padding-top:100px; 
        margin-bottom: 20px;
        padding: 10px;
        height: auto;
        width: auto;    
        background-color:#ffffff;

      }
       h4
   {
    text-align: center;
    
   }

   input[type=text] {

background-color:#DCDCDC;

}
.edit
{

    margin-left: 50px;
}

</style>

</head>

<body style="background-color: #2c9ada;color:#000000;">





<?php
$servername = "192.168.1.5";
$username = "root";
$password = "resnova";
$dbname = "data";


$conn = new mysqli($servername, $username, $password, $dbname);
$result=[];
$arr =[];
$arr1 =[];
$x =10;



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

for ($i=1;$i<=12;$i++)
{
$sql = "SELECT name ,amount FROM bay".$i."";
    $x =$i*$x;
  
    
$result[$i] = $conn->query($sql);


if ($result[$i]->num_rows > 0) {
    // output data of each row
    while($row = $result[$i]->fetch_assoc()) {
     
        if ($row["name"]!= '0')
        {
         
         $arr[$x]= $row["name"];
         $arr1[$x]=$row["amount"];
         $x +=1;
         }
      
           

    }

 $x=10;
} 
 
} 

for ($i= 10;$i<=120;$i++)
{
    //echo $arr[$i];
}


$conn->close();





echo '<div class="container">';
echo '<div class="left" text-align="center"><h4>bay1</h4>';
echo '<form name="theform" action="chk.php" method="post">';    
    for ($i=10;$i<15;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    
    echo '<input id="submitbutton" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';
    echo '</div>';
    
 echo '<div class="left" text-align="center"><h4>bay2</h4>';
 echo '<form action="chk1.php" method="post">';
 for ($i=20;$i<25;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' onKeyup='checkform2()' float='left' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform2()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    } 
    echo '<input id="submitbutton2" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';

 echo '</div>';
 echo '<div class="left" text-align="center"><h4>bay3</h4>';
 echo '<form action="chk2.php">';
 for ($i=30;$i<35;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform3()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform3()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    echo '<input id="submitbutton3" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';
    echo '</div>';
    echo '<div class="left" text-align="center"><h4>bay4</h4>';
    echo '<form action="chk3.php">';
    for ($i=40;$i<45;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform4()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform4()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    echo '<input id="submitbutton4" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';

    echo '</div>';
 echo '<div class="left" text-align="center"><h4>bay5</h4>';
 echo '<form action="chk4.php">';
 for ($i=50;$i<55;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform5()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform5()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    echo '<input id="submitbutton5" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';  
 echo '</div>';
echo '<div class="left" text-align="center"><h4>bay6</h4>';
 echo '<form action="chk5.php">';
 for ($i=60;$i<65;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform6()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform6()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    } 
    echo '<input id="submitbutton6" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';
    echo '</div>';
    echo '<div class="left" text-align="center"><h4>bay7</h4>';
    echo '<form action="chk6.php">';
    for ($i=70;$i<75;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform7()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform7()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    echo '<input id="submitbutton7" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';

    echo '</div>';
 echo '<div class="left" text-align="center"><h4>bay8</h4>';
 echo '<form action="chk7.php">';
 for ($i=80;$i<85;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform8()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform8()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }  
    echo '<input id="submitbutton8" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';
 echo '</div>';
echo '<div class="left" text-align="center"><h4>bay9</h4>';
 echo '<form action="chk8.php">';
 for ($i=90;$i<95;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform9()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform9()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    echo '<input id="submitbutton9" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';
    echo '</div>';
    echo '<div class="left" text-align="center"><h4>bay10</h4>';  
    echo '<form action="chk9.php">';
    for ($i=100;$i<105;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform10()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform10()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    echo '<input id="submitbutton10" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';

    echo '</div>';
 echo '<div class="left" text-align="center"><h4>bay11</h4>';
 echo '<form action="chk10.php">';
 for ($i=110;$i<115;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform11()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform11()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }  
    echo '<input id="submitbutton11" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';
 echo '</div>';
echo '<div class="left" text-align="center"><h4>bay12</h4>';
 echo '<form action="chk11.php">';
 for ($i=120;$i<125;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform1()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform1()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }     
    echo '<input id="submitbutton1" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';
 echo '</div>';
     
  ?>
  </body> 