<?php 

$connected = mysqli_connect('mysql_db','root','root','mysql');
if($connected){
    echo 'connected';
}else{
    // echo 'my database not connected';
    return 404;
}

?>