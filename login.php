<?php
$user = $_POST[" "];
$pass = $_POST[" "];
if($user=="admin" && $pass=="nopass"){

    echo "welcome admin";

}else{
    echo "wrong user Id or password";
}
?>