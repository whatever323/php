<?php
#keeep in mind banna 2HRS work without this ur stpid 
#you r a linux_user not like them!!
error_reporting(E_ALL);
ini_set('display_errors', 1);




$con = mysqli_connect("localhost","root","","db")
or die("cnx echoue");


$id=$_POST['id'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$num=$_POST['num'];
$dt=$_POST['date'];


$req="INSERT INTO exer(id,nom,prenom,num,date_)
VALUES('$id','$prenom','$nom','$num','$dt');";
$res=mysqli_query($con, $req);
if ($res) {
    echo "Inserted successfully!";
} else {
    echo "Error inserting: " . mysqli_error($con);
}


mysqli_close($con);
?>
