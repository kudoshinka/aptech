<?php
session_start();
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    echo "Dang xuat thanh cong !";
}
?>
 