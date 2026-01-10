<?php 
$conn=mysqli_connect('localhost','root','','book');
if($conn){
    echo "connection succesfully";
}
else{
    echo "no connection";
}

$name=$_POST['user'];
//echo $name ;
$email=$_POST['email'];
//echo $email;

$number=$_POST['number'];
//echo $number;
$feedback=$_POST['co'];
//echo $feedback;
$query="insert into feedback(name,email,number,feedback)values('$name','$email','$number','$feedback')";
//echo $query;
mysqli_query($conn,$query);
header("location:feed12.php");
?>