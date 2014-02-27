<?php
sleep(1);
include('conn.php');
if($_POST) {
    $username = $_POST['username'];
    $query = "SELECT ID from usuarios where username = '".strtolower($username)."'";
    $results = mysql_query( $query) or die('ok');

    if ((mysql_num_rows(@$results) > 0) || (strlen($_POST['username']) < 5))
        echo 'No disponible';
    else
        echo 'Disponible';
}

mysql_close($conn);

?>