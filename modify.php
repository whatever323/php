<?php
#keeep in mind banna 2HRS work without this ur stpid 
#you r a linux_user not like them!!
error_reporting(E_ALL);
ini_set('display_errors', 1);

$con=mysqli_connect("localhost","root","","db")
or die("conexions echoue");

$id=$_POST['id'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$num=$_POST['num'];
$dt=$_POST['date'];

#module permet de  modifier

$req="UPDATE exer
        SET prenom='$prenom',
            nom='$nom',
            num='$num',
            date_='$dt'
        WHERE id='$id';";

$res=mysqli_query($con, $req);

if($res){
    echo "modifie avec succes";
}else{
    echo "erreur";
}

mysqli_close($con);
?>