<?php
/*$dsn='mysql:host=localhost;dbname=news_site';//data source name
$user= 'root';//the user to connect
$pass='';// password of this user

$db= new PDO($dsn,$user,$pass);//start a new connection with PDO class
 $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   

}

catch(PDOException $e){
     
}
*/
$conn=mysqli_connect('localhost','root','','news_site');
?>