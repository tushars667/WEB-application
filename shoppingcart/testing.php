<?php
try{
    $dbh = new pdo( 'localhost',
                    'root',
                    '',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}
?>