<?php include_once "db.php";

$chk=$Admin->count($_POST);
if($chk){
    echo $chk;
    $_SESSION['admin']=$_POST['acc'];
}else{
    echo 0;
}


?>