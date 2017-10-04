<?php





 $name1 =$_REQUEST['name60'];
 
 $amount1 =$_REQUEST['amount60'];
 $name2 =$_REQUEST['name61'];
 $amount2 =$_REQUEST['amount61'];
 $name3 =$_REQUEST['name62'];
 $amount3 =$_REQUEST['amount62'];
$name4 =$_REQUEST['name63'];
 $amount4 =$_REQUEST['amount63'];
$name5 =$_REQUEST['name64'];
 $amount5 =$_REQUEST['amount64'];
$name6 =$_REQUEST['name65'];
 $amount6 =$_REQUEST['amount65'];
$name7 =$_REQUEST['name66'];
 $amount7 =$_REQUEST['amount66'];
$name8 =$_REQUEST['name67'];
 $amount8 =$_REQUEST['amount67'];
$name9 =$_REQUEST['name68'];
$amount9 =$_REQUEST['amount68'];
 $name10 =$_REQUEST['name69'];
$amount10 =$_REQUEST['amount69'];
 

$servername = "192.168.1.5";
$username = "root";
$password = "resnova";
$dbname = "data";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 if ($name1 != '#$@%%' && $amount1 != '#$@%%')
{
 $sql = 'UPDATE bay6 SET name ="'.$name1.'", amount="'.$amount1.'" WHERE id=1';
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


if ($name2 != '#$@%%' && $amount2 != '#$@%%')
{
  echo $name2;
 $sql = 'UPDATE bay6 SET name ="'.$name2.'", amount="'.$amount2.'" WHERE id=2';
 if (mysqli_query($conn, $sql)) {

    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if ($name3 != '#$@%%' && $amount3 != '#$@%%')
{
 $sql = 'UPDATE bay6 SET name ="'.$name3.'", amount="'.$amount3.'" WHERE id=3';
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if ($name4 != '#$@%%' && $amount4 != '#$@%%')
{
 $sql = 'UPDATE bay6 SET name ="'.$name4.'", amount="'.$amount4.'" WHERE id=4';
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if ($name5 != '#$@%%' && $amount5 != '#$@%%')
{
 $sql = 'UPDATE bay6 SET name ="'.$name5.'", amount="'.$amount5.'" WHERE id=5';
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if ($name6 != '#$@%%' && $amount6 != '#$@%%')
{
 $sql = 'UPDATE bay6 SET name ="'.$name6.'", amount="'.$amount6.'" WHERE id=6';
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if ($name7 != '#$@%%' && $amount7 != '#$@%%')
{
 $sql = 'UPDATE bay6 SET name ="'.$name7.'", amount="'.$amount7.'" WHERE id=7';
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if ($name8 != '#$@%%' && $amount8 != '#$@%%')
{
 $sql = 'UPDATE bay6 SET name ="'.$name8.'", amount="'.$amount8.'" WHERE id=8';
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if ($name9 != '#$@%%' && $amount9 != '#$@%%')
{
 $sql = 'UPDATE bay2 SET name ="'.$name9.'", amount="'.$amount9.'" WHERE id=9';
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if ($name10 != '#$@%%' && $amount10 != '#$@%%')
{
 $sql = 'UPDATE bay2 SET name ="'.$name10.'", amount="'.$amount10.'" WHERE id=10';
 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

header('Location:pass.php');

?>