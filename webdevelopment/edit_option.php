<html>
<head>
<title>nest_input</title>

<?php

$name0="hello";
$name1="world";

for ($i=0;$i<5;$i++)
{

echo '<input type="text" name="edit" id ="member" ><br><br>';

}






?>
<script type="text/javascript" language="javascript">
var i=0
while (i<2){
var dummy = '<input type="text" name="name'+i+'" size="20" float="right" value="<?php echo $name0;?>">:<br><br><br>';
document.getElementById('wrapper').innerHTML += dummy;
i+=1

}


function add_fields(){
var x =x+1;	
var dummy = '<input type="text" name="name""+x+" size="5" float="right" value="">:<br><br><br>';
document.getElementById('wrapper').innerHTML += dummy;      
}

var x = 0;
var jvalue = 'this is javascript value';

<?php $abc = "<script>document.write(jvalue)</script>"?>  






function add_fields1(){


     var number = document.getElementById("member").value;
            
            x +=1 ;
            if (x == 1)
            { 
            for (var i=0;i<2;i++){
                // Append a node with a random text
            	if(i==0)
                {
                 var dummy = '<input type="text" name="name'+i+'" size="20" float="right" value="<?php echo $name0;?>">:<br><br><br>';
                }
                if(i==1)
                {
                 var dummy = '<input type="text" name="name'+i+'" size="20" float="right" value="<?php echo $name1;?>">:<br><br><br>';
                }
                  
                if(i==2)
                {
                 var dummy = '<input type="text" name="name'+i+'" size="20" float="right" value="<?php echo $name2;?>">:<br><br><br>';
                }

                if(i==3)
                {
                 var dummy = '<input type="text" name="name'+i+'" size="20" float="right" value="<?php echo $name3;?>">:<br><br><br>';
                }


                if(i==3)
                {
                 var dummy = '<input type="text" name="name'+i+'" size="20" float="right" value="<?php echo $name4;?>">:<br><br><br>';
                }

                if(i==0)
                {
                 var dummy = '<input type="text" name="name'+i+'" size="20" float="right" value="<?php echo $name5;?>">:<br><br><br>';
                }

                if(i==0)
                {
                 var dummy = '<input type="text" name="name'+i+'" size="20" float="right" value="<?php echo $name6;?>">:<br><br><br>';
                }

            document.getElementById('wrapper').innerHTML += dummy;     
            }




          
          
           var dummy = '<form ><input type="submit" value="done" size="20" float="right"></form>';
              document.getElementById('wrapper').innerHTML += dummy;      
}
}
</script>



</head>
<body style="background-color: #2c9ada;color:#000000;">
<style type="text/css">
    .container{
        position:fixed;
       top: 50%;
    left: 50%;
    width:30em;
    height:18em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em;
    }
    .edit
    {
     position:fixed;
    top: 20%;
    left: 40%;
    width:30em;
    height:18em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em;


    }


    
    .left {
    	display: block;
    	margin-left:20px;
        float: left;
        padding-top:200px; 
        margin-bottom: 20px;
        padding: 20px;
        height: auto;
        width: auto;    
        background-color:#ffffff;
    }
    .right {
    	margin-bottom: 20px;
    	margin-left:20px;
    	float: left;
    	height: auto;
    	width: auto;    
        padding: 20px;
        background-color:#ffffff;    
    }
    .left1 {
    	margin-bottom: 20px;
    	margin-left:20px;
    	float: left;
    	height: auto;
        width: auto;    
        padding: 20px;
        background-color: #ffffff;    
    }
    .left2 {
    	margin-bottom: 20px;
    	margin-left:20px;
    	float: left;
    	height: auto;
        width: auto;    
        padding: 20px;
        background-color: #ffffff;    
    }
   h4
   {
   	text-align: center;
    color:#7b7f7d ;
   	
   }
   
input[type=text] {

background-color:#DCDCDC;

}
</style>

<div class="edit" style="float:left; padding-left:70px; padding-top: 90px;">
    no of elements:
    <input type="text" name="edit" id ="member" >
    <input type="button" value="Edit" onclick="add_fields1();" >

</div>
<br>
<br><br>





<div class="container" >
    <div class="left" text-align="center"><h4>bay1</h4>
    <form action="chk1.php" value="get">
     <input type="text" name="total:" size="20" float="right" value="total" >:
    <br>
    <br>
    <input type="text" name="total:" size="20" float="right" value="achieved" >:
    <br>
    <br>
    
    
    <input type="text" name="total:" size="20" float="right" value="percentage" >:
    <br>
    <br>
    
    <div class="blk" style="float: right; "  id ="wrapper">
    
    <input type="text" name="achieved" size="20" padding-right="20" value="remaining">:<br><br>
    
    </div><br>
     <br>
     
     <!--
    <div class="blk" style="float: right;">
    <input type="<?php echo htmlspecialchars($name); ?>" name="total:" size="5" float="left" value="" >
    <input type="<?php echo htmlspecialchars($name); ?>" name="achieved" size="20" padding-right="20"><br>
    </div><br>
    <br>
    <div class="blk" style="float: right;">
    <input type="<?php echo htmlspecialchars($name); ?>" name="total:" size="5" float="left" value="" >:
    <input type="<?php echo htmlspecialchars($name); ?>" name="achieved" size="20" padding-right="20"><br>
    </div><br>
    <br>


    <br><br>
    <input type="submit" value="edit" style="float: right;">
    -->
</div>	

</body>
</html>
$name1 =$_REQUEST['name10'];
 
 $amount1 =$_REQUEST['amount10'];
 $name2 =$_REQUEST['name11'];
 $amount =$_REQUEST['amount11'];
 $name3 =$_REQUEST['name12'];
 $amount3 =$_REQUEST['amount12'];
$name4 =$_REQUEST['name13'];
 $amount4 =$_REQUEST['amount13'];
$name5 =$_REQUEST['name14'];
 $amount5 =$_REQUEST['amount14'];
$name6 =$_REQUEST['name15'];
 $amount6 =$_REQUEST['amount15'];
$name7 =$_REQUEST['name16'];
 $amount7 =$_REQUEST['amount16'];
$name8 =$_REQUEST['name17'];
 $amount8 =$_REQUEST['amount17'];
$name9 =$_REQUEST['name18'];
$amount9 =$_REQUEST['amount18'];
 $name10 =$_REQUEST['name19'];
$amount10 =$_REQUEST['amount19'];
 
$servername = "192.168.1.5";
$username = "root";
$password = "resnova";
$dbname = "data";


$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($name1 != '0' && $amount1 != '0')
{
 echo $amount1;
 $sql = "update bay1 set name =".$name1." amount=".$amount1." where id="1"";
 

 if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



}

echo "hello";
$conn->close();