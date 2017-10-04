<html>

<head>



 <meta http-equiv="refresh" content="3">
<style type="text/css">
    .container{

        padding-top: 90px;
        margin-left:300px;
        height: auto;
        width: auto;
        padding-bottom: 210px;
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

    margin-left: 310px;
}

</style>

</head>

<body style="background-color: #2c9ada;color:#000000;">


<div class="edit" style="float:left; padding-top: 40px;">
<form action="nest.php" method="post">
    <input type="submit" value="Edit" >
</form>
</div>
<br>
<br><br>




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
   
    for ($i=10;$i<15;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='5' float='left' onKeyup='checkform()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    
    echo '</div>';
    
 echo '<div class="left" text-align="center"><h4>bay2</h4>';
 
 for ($i=20;$i<25;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='total' size='5' onKeyup='checkform2()' float='left' value='".$d."'>:";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform2()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    } 
    
 echo '</div>';
 echo '<div class="left" text-align="center"><h4>bay3</h4>';
 
 for ($i=30;$i<35;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform3()' value='".$d."'>:";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform3()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    
    echo '</div>';

    
    echo '<div class="left" text-align="center"><h4>bay4</h4>';
    
    for ($i=40;$i<45;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform4()' value='".$d."'>:";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform4()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    

    echo '</div></div>';

  echo '<div class="container">';
  echo '<div class="left" text-align="center"><h4>bay5</h4>';
 
 for ($i=50;$i<55;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform5()' value='".$d."'>:";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform5()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }  
 echo '</div>';
echo '<div class="left" text-align="center"><h4>bay6</h4>';
 
 for ($i=60;$i<65;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform6()' value='".$d."'>:";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform6()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    } 
    echo '</div>';
    echo '<div class="left" text-align="center"><h4>bay7</h4>';
    
    for ($i=70;$i<75;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform7()' value='".$d."'>:";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform7()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    echo '</div>';
 echo '<div class="left" text-align="center"><h4>bay8</h4>';
  for ($i=80;$i<85;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform8()' value='".$d."'>:";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform8()' value='".$e."'><br>";
    echo "</div><br><br>";
        
    }  
    
 echo '</div></div>';
echo '<div class="container">';
echo '<div class="left" text-align="center"><h4>bay9</h4>';
 
 for ($i=90;$i<95;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform9()' value='".$d."'>:";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform9()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
   
    echo '</div>';
    echo '<div class="left" text-align="center"><h4>bay10</h4>';  
    
    for ($i=100;$i<105;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform10()' value='".$d."'>:";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform10()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
   
    echo '</div>';
 echo '<div class="left" text-align="center"><h4>bay11</h4>';
 
 for ($i=110;$i<115;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform11()' value='".$d."'>:";
    echo "<input type='text' name='total' size='5' float='left' onKeyup='checkform11()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }  
     echo '</div>';
echo '<div class="left" text-align="center"><h4>bay12</h4>';
 
 for ($i=120;$i<125;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='5' float='left' onKeyup='checkform1()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='5' float='left' onKeyup='checkform1()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }     
    
 echo '</div>';
     
  ?>
  </body> 