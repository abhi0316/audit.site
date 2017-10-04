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
</script>



<body>
<?php


echo '<div class="container">';
echo '<div class="left" text-align="center"><h4>bay1</h4>';
echo '<form name="theform" action="chk.php" method="post">';    
    for ($i=10;$i<20;$i++)
    {
     $d= $arr[$i];
     $e= $arr1[$i];
    echo "<div class='blk' style='float: left;'>";
    echo "<input type='text' name='name".$i."' size='10' float='left' onKeyup='checkform()' value='".$d."'>:";
    echo "<input type='text' name='amount".$i."' size='10' float='left' onKeyup='checkform()' value='".$e."'><br>";
    echo "</div><br><br>";
    
    }
    
    echo '<input id="submitbutton" type="submit" disabled="disabled" value="SAVE" style="float: right;" />';
    echo '</form>';
    echo '</div>';
  echo '</div>'; 
 ?>
 </body>    