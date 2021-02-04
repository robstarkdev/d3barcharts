<?php


$message = '';

$db = new mysqli('localhost', 'chineseNameInPinyin', 'fakepassword', 'newforrent');




if ($db->connect_error){

    $message = $db->connect_error;
    echo $message ;

}else{



}

?>