<?php
#keeep in mind banna 2HRS work without this 2 lines ur stpid 
#you r a linux_user not like them!!
error_reporting(E_ALL);
ini_set('display_errors', 1);



$con = mysqli_connect("localhost","root","","db")
or die("cnx echoue");

$id=$_POST['id'];

$rec="DELETE FROM exer where id='$id';";

$res=mysqli_query($con,$rec);

if($res){
    echo"persone a ete supprimer";
}else{
    echo "errer";
}

mysqli_close($con);
?>