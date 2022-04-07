<?php
 session_start();  
 unset($_SESSION['id']);
 unset($_SESSION['user_id']);
 unset($_SESSION['user_firstname']);
 unset($_SESSION['user_phone']);
 session_destroy();
 header("Location: https://ecoops-financial.com/dashboard/admin/");
?>