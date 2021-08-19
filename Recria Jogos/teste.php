<?php
session_start();
if(isset($_SESSION['statu'])== true){
echo $_SESSION['apelido'];
}
?>