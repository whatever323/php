<?php


header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies
#keeep in mind banna 2HRS work without this ur stpid 
#you r a linux_user not like them!!
error_reporting(E_ALL);
ini_set('display_errors', 1);




$con = mysqli_connect("localhost","root","","db")
or die("cnx echoue");

$rec="SELECT* FROM exer;";
$res=mysqli_query($con,$rec);

if(mysqli_num_rows($res)>0){
    echo"<table border='1'>";
    echo"<tr><th>id</th>
             <th>prenom</th>
             <th>nom</th>
             <th>num</th>
             <th>date</th></tr>";

    while($row=mysqli_fetch_array($res)){
        echo"<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['prenom']."</td>";
        echo "<td>".$row['nom']."</td>";
        echo "<td>".$row['num']."</td>";
        echo "<td>".$row['date_']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
mysqli_close($con);












